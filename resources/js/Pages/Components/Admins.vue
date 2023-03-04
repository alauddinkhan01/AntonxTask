<template>
  <div class="row px-2">
    <div class="col-12">
      <div data-page-count="1">
        <div class="row mt-4">
          <div class="col-md-9 mb-2"></div>
          <div class="col-md-3">
            <input
              type="text"
              placeholder="Search..."
              v-model="findAdmin"
              class="form-control"
            />
          </div>
        </div>
      </div>
      <div>
        <table class="table">
          <thead>
            <tr>
              <th class="sort">Sr No.</th>
              <th class="sort">NAME</th>
              <th class="sort">EMAIL</th>
              <th class="sort">ROLE</th>
              <th class="sort">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(admin, index) in admins.data" :key="admin.id">
              <td scope="row">{{ index + 1 }}</td>
              <td scope="row">{{ admin.name }}</td>
              <td scope="row">{{ admin.email }}</td>
              <td scope="row">Admin</td>
              <td scope="row">
                <Link
                  class="btn btn btn-success btn-sm mb-0 mr-1"
                  :href="route('admin.admins.edit', admin.id)"
                  :data="{ redirectUrl: this.page }"
                >
                  Edit
                </Link>
                <Link
                  class="btn btn-danger btn-sm mb-0"
                  @click="deleteUser(admin.id)"
                >
                  Delete
                </Link>
              </td>
            </tr>
            <!---->
            <tr v-if="admins.total <= 0">
              <td colspan="12" class="text-center">No Admins Found</td>
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
import debounce from "lodash/debounce";
import { useToast } from "vue-toastification";


export default {
  props: ["admins", "search_admin", "page"],
  components: {
    useToast,
  },
  data() {
    return {
      findAdmin: this.search_admin,
      routeUrl: "",
      redirection: {
        redirectUrl: this.page,
      },
    };
  },
  created() {
    if (this.page == "dashboard") {
      this.routeUrl = "vue-admin-dashboard";
    } else {
      this.routeUrl = "admin.admins.index";
    }
  },
  watch: {
    findAdmin(value) {
      this.searchAdmin(value);
    },
  },
  methods: {
    searchAdmin: debounce(function (value) {
      this.$inertia.get(
        route(this.routeUrl),
        { "admin-search": value },
        {
          preserveScroll: true,
          preserveState: true,
          replace: true,
        }
      );
    }, 350),
    deleteUser(id) {
      const toast = useToast();
      if (confirm("Do you want to delete selected admin?")) {
        this.$inertia.get(route("admin.admins.delete", id), this.redirection, {
          onSuccess: () => {
            toast.success(this.$page.props.flash.success);
          },
        });
      }
    },
  },
};
</script>
<style lang=""></style>
