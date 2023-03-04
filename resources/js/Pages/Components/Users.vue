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
              <th class="sort">Email</th>
              <th class="sort">Role</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(user, index) in users.data" :key="user.id">
              <td scope="row">{{ index + 1 }}</td>
              <td scope="row">{{ user.first_name }}</td>
              <td scope="row">{{ user.last_name }}</td>
              <td scope="row">{{ user.email }}</td>
              <td scope="row">Editor</td>
            </tr>
            <!---->
            <tr v-if="users.total <= 0">
              <td colspan="12" class="text-center">No Users Found</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <Pagination
          :links="users.links"
          :count="users.total"
          :totalPages="users.last_page"
        />
      </div>
    </div>
  </div>
</template>
<script>
import Pagination from "../Components/Pagination.vue";

export default {
  props: ["users"],

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
