// $(document).ready(function(){
//     var r = Resumable({
//         target: "{{ route('file-upload) }}",
//         chunkSize: 1 * 1024 * 1024,
//         simultaneousUploads: 3,
//         testChunk: false,
//         throttleProgressCallbacks: 1,
//         query:{_token: $('input[name=_token]').val()}
//     });

//     $(document).on('click', function(e){
//         e.preventDefault();
//         let action = $(this).attr('data-action');
//         if(action == 'upload'){
//             r.upload();
//         }else if(action == 'pause'){
//             r.pause();
//         }else if(action == 'cancel'){
//             r.cancel();
//         }

//         var fileElement = document.getElementById('file'); //change Id
//         r.assignBrowse(fileElement);

//         r.on('fileAdded', function(file){
//             $('.action-buttons').show();
//             $('.progress-esume-link').hide();
//             $('.progress-pause-link').show();

//             $('.resumable-list').append()
//         });
//     });
// });

// let browseFile = $('#browseFile');
//     let resumable = new Resumable({
//         target: "{{ url('/upload') }}",
//         query:{ _token:'{{ csrf_token() }}'} ,// CSRF token
//         fileType: ['mp4'],
//         headers: {
//             'Accept' : 'application/json'
//         },
//         testChunks: false,
//         throttleProgressCallbacks: 1,
//     });

//     resumable.assignBrowse(browseFile[0]);

//     resumable.on('fileAdded', function (file) { // trigger when file picked
//         showProgress();
//         resumable.upload() // to actually start uploading.
//     });

//     resumable.on('fileProgress', function (file) { // trigger when file progress update
//         updateProgress(Math.floor(file.progress() * 100));
//     });

//     resumable.on('fileSuccess', function (file, response) { // trigger when file upload complete
//         response = JSON.parse(response)
//         $('#videoPreview').attr('src', response.path);
//         $('.card-footer').show();
//     });

//     resumable.on('fileError', function (file, response) { // trigger when there is any error
//         alert('file uploading error.')
//     });


//     let progress = $('.progress');
//     function showProgress() {
//         progress.find('.progress-bar').css('width', '0%');
//         progress.find('.progress-bar').html('0%');
//         progress.find('.progress-bar').removeClass('bg-success');
//         progress.show();
//     }

//     function updateProgress(value) {
//         progress.find('.progress-bar').css('width', `${value}%`)
//         progress.find('.progress-bar').html(`${value}%`)
//     }

//     function hideProgress() {
//         progress.hide();
//     }
