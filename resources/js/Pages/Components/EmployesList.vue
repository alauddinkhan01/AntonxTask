<template>
    <div class="row px-2">
      <div class="col-12">
        <div data-page-count="1">
          <div class="row mt-4">
            <div class="col-md-9 mb-2"></div>
            <div class="col-md-3">
            </div>
          </div>
        </div>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th class="sort">Sr No.</th>
                <th class="sort">First Name</th>
                <th class="sort">Last Name</th>
                <th class="sort">Department</th>
                <th class="sort">Job</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(employe, index) in employes.data" :key="index.id">
                <td scope="row">{{ index + 1 }}</td>
                <td scope="row">{{ employe.first_name }}</td>
                <td scope="row">{{ employe.last_name }}</td>
                <td scope="row">{{ employe.job.department.department_name }}</td>
                <td scope="row">{{ employe.job.job_title }}</td>
              </tr>
              <!---->
              <tr v-if="employes.total <= 0">
                <td colspan="12" class="text-center">No Users Found</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <Pagination
            :links="employes.links"
            :count="employes.total"
            :totalPages="employes.last_page"
          />
        </div>
      </div>
    </div>
  </template>
  <script>
  import Pagination from "../Components/Pagination.vue";
  
  export default {
    props: ["employes"],
  
    components: {
      Pagination
    },
    data() {
      return {
      
      };
    },
  };
  </script>
  <style></style>
  