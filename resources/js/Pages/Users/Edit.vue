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
              <div class="col-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <!--  -->
                    <h4 class="card-title">Edit User</h4>
                  </div>
                  <div class="card-body">
                    <form @submit.prevent="editUser">
                      <div class="form-group bmd-form-group">
                        <label for="name" class=""
                          >Name
                          <span
                            class="text-danger"
                            style="
                              position: relative;
                              font-size: 16px;
                              top: 4px;
                            "
                            >*</span
                          ></label
                        >
                        <input
                          type="text"
                          v-model="formObj.name"
                          name="name"
                          class="form-control px-1"
                          placeholder="Enter Name"
                          id="name"
                        />
                        <span v-if="error.name" class="text-danger"
                          >Enter Name</span
                        >
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="exampleEmail" class=""
                          >Email Address
                          <span
                            class="text-danger"
                            style="
                              position: relative;
                              font-size: 16px;
                              top: 4px;
                            "
                            >*</span
                          ></label
                        >
                        <input
                          type="email"
                          v-model="formObj.email"
                          class="form-control px-1"
                          placeholder="Enter Email"
                          id="exampleEmail"
                        />
                        <span v-if="error.email" class="text-danger"
                          >Enter a valid Email</span
                        >
                        <span v-if="errors.email" class="text-danger">{{
                          errors.email
                        }}</span>
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="examplePass">Password</label>
                        <input
                          :type="showPassword ? 'text' : 'password'"
                          v-model="formObj.password"
                          class="form-control px-1"
                          placeholder="Enter Password"
                          id="examplePass"
                        />
                        <span
                          @click="togglePassword"
                          class="material-icons pass-icon text-primary"
                        >
                          {{ passwordIcon }}
                        </span>
                      </div>
                      <span v-if="error.password" class="text-danger"
                        >Enter Password</span
                      >
                      <span v-if="errors.password" class="text-danger">{{
                        errors.password
                      }}</span>
                      <div class="form-group bmd-form-group">
                        <label for="examplePass">Confirm Password</label>
                        <input
                          :type="showConfirmPassword ? 'text' : 'password'"
                          v-model="formObj.password_confirmation"
                          class="form-control px-1"
                          placeholder="Confirm Password"
                          id="examplePass"
                        />
                        <span
                          @click="toggleConfirmPassword"
                          class="material-icons pass-icon text-primary"
                        >
                          {{ confirmPasswordIcon }}
                        </span>
                        <span v-if="error.password" class="text-danger"
                          >Confirm Password</span
                        >
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-rose">
                          Update
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- <UserFiles :rar_files="rar_files" class="mt-4" /> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Navbar from "../Components/Navbar.vue";
import Sidebar from "../Components/Sidebar.vue";

import { useToast } from "vue-toastification";

export default {
  props: ["user", "errors", "rar_files", "redirectUrl"],
  components: {
    Navbar,
    Sidebar,
    useToast,

  },

  data() {
    return {
      showPassword: false,
      showConfirmPassword: false,
      passwordIcon: "visibility_off",
      confirmPasswordIcon: "visibility_off",
      pattern: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
      formObj: {
        name: this.user.name,
        email: this.user.email,
        password: "",
        password_confirmation: "",
        redirectUrl: this.redirectUrl,
      },
      error: {
        name: false,
        email: false,
      },
    };
  },

  methods: {
    editUser() {
      const toast = useToast();
      this.formObj.name == ""
        ? (this.error.name = true)
        : (this.error.name = false);
      this.formObj.email == ""
        ? (this.error.email = true)
        : (this.error.email = false);
      if (!this.pattern.test(this.formObj.email)) {
        this.error.email = true;
      } else {
        this.error.email = false;
      }
      if (this.error.name || this.error.email) {
        return false;
      }
      this.$inertia.post(
        route("admin.users.update", this.user.id),
        this.formObj,
        {
          onSuccess: () => {
            toast.success(this.$page.props.flash.success);
          },
        }
      );
    },

    togglePassword() {
      this.showPassword = !this.showPassword;
      if (this.showPassword) {
        this.passwordIcon = "visibility";
      } else {
        this.passwordIcon = "visibility_off";
      }
    },

    toggleConfirmPassword() {
      this.showConfirmPassword = !this.showConfirmPassword;
      if (this.showConfirmPassword) {
        this.confirmPasswordIcon = "visibility";
      } else {
        this.confirmPasswordIcon = "visibility_off";
      }
    },
  },
};
</script>
<style>
.pass-icon {
  position: absolute;
  bottom: 18px;
  right: 7px;
  cursor: pointer;
}
</style>
