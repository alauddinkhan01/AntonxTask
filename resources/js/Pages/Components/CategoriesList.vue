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
                <th class="sort">Author Name</th>
                <th class="sort">Category</th>
                <th class="sort">Total Books </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(authorCategorie, index) in authorCategories" :key="index.id">
                <td scope="row">{{ index + 1 }}</td>
                <td scope="row">Jane Doe</td>
                <td scope="row">{{ authorCategorie.title }}</td>
                <td scope="row">{{ authorCategorie.category_books_count }}</td>
                
                
              </tr>
              <!---->
              <!-- <tr v-if="authorBooks.total <= 0">
                <td colspan="12" class="text-center">No Users Found</td>
              </tr> -->
            </tbody>
          </table>
        </div>
        <div>
          <!-- <Pagination
            :links="users.links"
            :count="users.total"
            :totalPages="users.last_page"
          /> -->
        </div>
      </div>
    </div>
  </template>
  <script>
  import Pagination from "../Components/Pagination.vue";
  
  export default {
    props: ["authorCategories"],
  
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
  