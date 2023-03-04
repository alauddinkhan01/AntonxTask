<template>
  <div class="wrapper">
    <Sidebar />
    <div class="main-panel">
      <!-- Navbar -->
      <Navbar />
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Total Admins</p>
                  <h3 class="card-title">
                    <!-- {{ admins.total }} -->
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <Link :href="route('admin.admins.index')">See More</Link> -->
                    <i class="material-icons text-success">trending_flat</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Total Users</p>
                  <!-- <h3 class="card-title">{{ users.total }}</h3> -->
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <Link :href="route('admin.users.index')">See More</Link> -->
                    <i class="material-icons text-success">trending_flat</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">pie_chart</i>
                  </div>
                  <p class="card-category">Total Subscribers</p>
                  <!-- <h3 class="card-title">{{ subscribers.total }}</h3> -->
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <Link :href="route('admin.subscribers.index')"
                      >See More</Link
                    > -->
                    <i class="material-icons text-success">trending_flat</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">paid</i>
                  </div>
                  <p class="card-category">Total Transactions</p>
                  <!-- <h3 class="card-title">{{ transactions.total }}</h3> -->
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <Link :href="route('admin.payments.index')">See More</Link> -->
                    <i class="material-icons text-success">trending_flat</i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="accordion">
            <div class="card my-5">
              <div
                class="card-header card-header-primary"
                style="margin-left: 0px; margin-right: 0px; cursor: pointer"
                id="headingOne"
                @click="toggleAccordion = !toggleAccordion"
              >
                <h5 class="mb-0">
                  <button class="btn btn-link" style="color: white">
                    <b>Admin Role Permissions and Permission Users</b>
                  </button>
                  <i class="material-icons float-right mt-3">
                    {{ toggleAccordion ? "arrow_upward" : "arrow_downward" }}
                  </i>
                </h5>
              </div>

              <div
                id="collapseOne"
                class="collapse"
                :class="toggleAccordion ? 'show' : ''"
              >
                <div class="card-body">
                  <div class="content">
                    <RolePermissions :permissions="permissions" :page="'dashboard'"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="card my-5">
              <div
                class="card-header card-header-success"
                style="margin-left: 0px; margin-right: 0px; cursor: pointer"
                id="headingTwo"
                @click="toggleAccordionTwo = !toggleAccordionTwo"
              >
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color: white">
                    <b>Editor Role Users List</b>
                  </button>
                  <i class="material-icons float-right mt-3">
                    {{ toggleAccordionTwo ? "arrow_upward" : "arrow_downward" }}
                  </i>
                </h5>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                :class="toggleAccordionTwo ? 'show' : ''"
              >
                <div class="card-body">
                  <div class="content">
                    <Users :users="users" :page="'dashboard'"/>
                  </div>
                </div>
              </div>
            </div>

            <div class="card my-5">
              <div
                class="card-header card-header-info"
                style="margin-left: 0px; margin-right: 0px; cursor: pointer"
                id="headingThree"
                @click="toggleAccordionFour = !toggleAccordionFour"
              >
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color: white">
                    <b>Permission Roles</b>
                  </button>
                  <i class="material-icons float-right mt-3">
                    {{
                      toggleAccordionFour ? "arrow_upward" : "arrow_downward"
                    }}
                  </i>
                </h5>
              </div>
              <div
                id="collapseThree"
                :class="toggleAccordionFour ? 'show' : ''"
                class="collapse"
              >
                <div class="card-body">
                  <div class="content">
                    <Roles :roles="roles" :page="'dashboard'"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <Footer /> -->
    </div>
  </div>
</template>

<script>
import Navbar from "./Components/Navbar.vue";
import Sidebar from "./Components/Sidebar.vue";
import Footer from "./Components/Footer.vue";
import Users from "./Components/Users.vue";
import RolePermissions from "./Components/RolePermissions.vue";
import Roles from "./Components/Roles.vue";


export default {
  props: ["users","permissions","roles"],

  data() {
    return {
      toggleAccordion: false,
      toggleAccordionTwo: false,
      toggleAccordionThree: false,
      toggleAccordionFour: false,
    };
  },

  components: {
    Navbar,
    Sidebar,
    Footer,
    Users,
    RolePermissions,
    Roles
  },
};
</script>
