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
                <th class="sort">Category</th>
                <th class="sort">Book Title</th>
                <th class="sort">Publish Date</th>
                <th class="sort">Author</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(book, index) in books" :key="book.id">
                <td scope="row">{{ index + 1 }}</td>
                <td scope="row">Mystery</td>
                <td scope="row">{{ book.title }}</td>
                <td scope="row">{{ book.publish_date }}</td>
                <td scope="row">
                    <span v-for="(book_author, index) in book.book_authors" :key="index.id">
                        <span>{{ book_author.author.name}}{{ ' ,' }}</span>
                    </span>
                </td>
                
              </tr>
              <!---->
              <tr v-if="books.total <= 0">
                <td colspan="12" class="text-center">No Users Found</td>
              </tr>
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
    props: ["books"],
  
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
  