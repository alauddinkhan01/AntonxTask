<template>
  <nav
    class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
  >
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Dashboard</a>
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        aria-controls="navigation-index"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" :class="toggleNavProfile ? 'show' : ''">
            <a
              class="nav-link"
              @click="toggleNavProfile = !toggleNavProfile"
              href="javascript:;"
              id="navbarDropdownProfile"
            >
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">Account</p>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              :class="toggleNavProfile ? 'show' : ''"
            >
              <!-- <Link class="dropdown-item" :href="route('admin.profile.edit')"
                >Profile</Link
              > -->
              <Link class="dropdown-item" @click="logout">Log out</Link>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import axios from "axios";
import VueAxios from "vue-axios";
import { useToast } from "vue-toastification";

export default {
  components:{
    useToast
  },
  data() {
    return {
      toggleNavProfile: false,
    };
  },

  methods: {
    logout() {
      const toast = useToast();
      this.$http.post(route("vue-admin-logout")).then((response) => {
        window.location.href = "/";
        toast.warning("You are logout successfully");
      });
    },
  },
};
</script>

<style></style>