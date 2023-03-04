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
                    <h4 class="card-title">List Of Employes</h4>
                    <p class="card-category">List of employes in Sale department at Acme Inc Company</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
              
                      </div>
                    </div>
                    <!-- user table -->
                    <EmployesList :employes="employes"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">List of Companies</h4>
                    <p class="card-category">List Companies with their total number of employes</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
              
                      </div>
                    </div>
                    <!-- user table -->
                    <Companies :companies="companies"/>
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
import EmployesList from "../Components/EmployesList.vue";
import Companies from "../Components/Companies.vue";
export default {
  props: ["employes","companies"],
  components: {
    Navbar,
    Sidebar,
    EmployesList,
    Companies
  },

  data() {
    return {};
  },
};
</script>
<style></style>