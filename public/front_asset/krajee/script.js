
$(document).ready(function(){
    localStorage.removeItem('Data');
    $.fn.fileinputBsVersion = "3.3.7"; // if not set, this will be auto-derived
    // initialize plugin with defaults
    $("#file-1").fileinput();
    // with plugin options
    $("#file-1").fileinput({'showUpload':true, 'previewFileType':'any'});

    setTimeout(() => {
        $(".alert").hide()
    }, 4000);
})



$("#file-1").fileinput({
    enableResumableUpload: true,
    theme: 'fa5',
    showCancel: true,
    uploadUrl: "{{ route('file-upload') }}",
    // allowedFileExtensions: ['jpg', 'png', 'gif'],
    overwriteInitial: false,
    maxFileSize:2097152, //Size in KB and 2097152 = 2GB
    maxFilesNum: 1,
    maxFileCount:"{{ Auth::check() ? (Auth::user()->subscription_details ? Auth::user()->subscription_details->number_of_files : 100) : 100}}",
    minFileCount:1,
    slugCallback: function (filename) {
        return filename.replace('(', '_').replace(']', '_');
    },
    
}).on('filechunkcomplete', function(event, previewId, index, retry, fm, rm, data){
    // console.log(event, previewId, index, retry, fm, rm, data)
}).on('filechunksuccess', function(event, previewId, index, retry, fm, rm, data){
    var obj = data.response.initialPreviewConfig;
    var array = JSON.parse(localStorage.getItem('Data') || '[]');
    var check = array.includes(obj[0].extra)

    if(!check){
        array.push(obj[0].extra);
        localStorage.setItem('Data', JSON.stringify(array));
    }

    $('#transfer').removeClass('d-none');

}).on('filechunkbeforesend', function(event, previewId, index, retry, fm, rm, data) {
    var files = data.files;
    var filesArray = []
    $.each(files , function(index, val) { 
        filesArray.push(val.size)
    });

    var total = 0;
    for (var i = 0; i < filesArray.length; i++) {
        total += filesArray[i] << 0;
    }

    var checkLogin = "{{ Auth::check() ? 'login' : 'noLogin' }}"

    if(checkLogin == 'login'){
        
        var subscriptionCheck = "{{ Auth::check() ? (Auth::user()->subscription_details ? 'subscribed' : null) : null }}"
        console.log(subscriptionCheck)
        if(subscriptionCheck){
            var fileSize = "{{ Auth::check() ? (Auth::user()->subscription_details ? Auth::user()->subscription_details->size  * 1024 : null) : null }}";
            var diffHours = "{{ Auth::check() ? \Carbon\Carbon::parse(\Carbon\Carbon::now('GMT+5')->format('Y-m-d g:i:s a'))->diffInHours(\Carbon\Carbon::parse(Auth::user()->subscription_expiry)->format('Y-m-d g:i:s a'), false) : null }}";
            console.log(diffHours)
        
            if(parseInt(diffHours) <= parseInt(0)){
                $('#file-1').fileinput('cancel');
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Your SubScription is expired. Please Renew it'
                }).then(function(){
                    $('#transfer').addClass('d-none');
                    localStorage.removeItem('Data');
                });  
            }else if(total > fileSize){
                var convertedFileSizeToGB = ((fileSize/1024)/1024)/1024;
                $('#file-1').fileinput('cancel');
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'You cannot Upload Data More than '+convertedFileSizeToGB+'GB due to the Package you Subscribed. Upgrade the Package..'
                }).then(function(){
                    $('#transfer').addClass('d-none');
                    localStorage.removeItem('Data');
                });                    
            }
        }else{
            var fileSize = 2097152*1024;
            if(total > fileSize){
                $('#file-1').fileinput('cancel');
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'You cannot Upload Data More than 2GB. Please Buy the Subscription'
                }).then(function(){
                    $('#transfer').addClass('d-none');
                    localStorage.removeItem('Data');
                });                    
            }
        }
        
    }

    if(checkLogin == 'noLogin'){
        var fileSize = 2097152*1024;
        if(total > fileSize){
            $('#file-1').fileinput('cancel');
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'You cannot Upload Data More than 2GB. Please Login and Subscribe our Plans'
            }).then(function(){
                $('#transfer').addClass('d-none');
                localStorage.removeItem('Data');
            });                    
        }
        console.log(total);
        console.log(checkLogin);
    }

});


$("#formSubmit").submit(function(event){
    event.preventDefault();
    if(localStorage.getItem('Data') != null){
        // let name = $("#name").val();
        // let email = $("#email").val();
        let filesIds = localStorage.getItem('Data');
        let _token   = $("#token").val();
        $.ajax({
            url: "{{ route('save-file') }}",
            type:"POST",
            data:{
                // name:name,
                // email:email,
                filesIds:filesIds,
                _token: _token,
            },
            success:function(response){
                $('#file-1').fileinput('clear');
                $('#url').empty();
                $('#url').append(response);
                localStorage.removeItem('Data');
                $("#ulList").empty();
                $('#transfer').addClass('d-none');
                // $('#otherTransfer').removeClass('d-none');
            }
        });
    }else{
        localStorage.removeItem('Data');
    }
})
$('#otherTransfer').on('click', function(){
    window.location.reload();
    $('#transfer').removeClass('d-none');
    $('#otherTransfer').addClass('d-none');
    $("#file-1").empty();
    localStorage.removeItem('Data');
    $('#url').empty();
});
