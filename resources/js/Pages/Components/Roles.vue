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
                <th class="sort">Role</th>
                <th class="sort">Permission</th>
                <th class="sort">Role Total Permissions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(role, index) in roles" :key="role.id">
                <td scope="row">{{ index + 1 }}</td>
                <td scope="row">{{ role.name }}</td>
                <td scope="row">Create Post</td>
                <td scope="row">{{ role.permissions_count }}</td>
              </tr>
              <tr v-if="roles.total <= 0">
                <td colspan="12" class="text-center">No Users Found</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
        </div>
      </div>
    </div>
  </template>
  <script>

  
  export default {
    props: ["roles", "page"],
  };
  </script>
  <style></style>
  