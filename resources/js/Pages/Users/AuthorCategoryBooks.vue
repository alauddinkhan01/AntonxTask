<template>
    <div>
      <div class="wrapper">
        <Sidebar />
        <div class="main-panel">
          <!-- Navbar -->
          <Navbar />
          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Mystery Category</h4>
                      <p class="card-category">Mystery Category Books and Authors</p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                        </div>
                      </div>
                      <!-- user table -->
                      <CategoryBooks :books="books"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Author Books</h4>
                      <p class="card-category">List of Books Written By John Smith</p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                        </div>
                      </div>
                      <!-- user table -->
                      <AuthorBooks :authorBooks="authorBooks"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">List Authors</h4>
                      <p class="card-category">List of Authors which have a least one Book in Thriller category</p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                        </div>
                      </div>
                      <!-- user table -->
                      <AuthorList :autherCategoryBooks="autherCategoryBooks"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">List Categories</h4>
                      <p class="card-category">List of Categories in which Jane Doe have written at laest one Book </p>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                        </div>
                      </div>
                      <!-- user table -->
                      <CategoriesList :authorCategories="authorCategories"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>
  import Navbar from "../Components/Navbar.vue";
  import Sidebar from "../Components/Sidebar.vue";
  import CategoryBooks from "../Components/CategoryBooks.vue";
  import AuthorBooks from "../Components/AuthorBooks.vue";
  import AuthorList from "../Components/AuthorList.vue";
  import CategoriesList from "../Components/CategoriesList.vue";
  export default {
    props: ["books","authorBooks","autherCategoryBooks","authorCategories"],
    components: {
      Navbar,
      Sidebar,
      CategoryBooks,
      AuthorBooks,
      AuthorList,
      CategoriesList
    },
  
    data() {
      return {};
    },
  };
  </script>
  <style></style>