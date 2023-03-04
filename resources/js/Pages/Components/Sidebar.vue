<template>
  <div
    class="sidebar"
    data-color="purple"
    data-background-color="white"
    data-image="../assets/img/sidebar-1.jpg"
  >
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <Link href="/admin/dashboard" class="simple-text logo-normal">
        Anotnx Tasks
      </Link>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item" :class="$page.component == 'Home' ? 'active' : ''">
          <Link class="nav-link" :href="route('vue-admin-dashboard')">
            <i class="material-icons">dashboard</i>
            <p>Task # 3</p>
          </Link>
        </li>
        
        <li
          class="nav-item"
          :class="
            $page.component == 'Users/Index' ||
            $page.component == 'Users/Create' ||
            $page.component == 'Users/Edit'
              ? 'active'
              : ''
          "
        >
          <Link class="nav-link" :href="route('admin.users.index')">
            <i class="material-icons">people_alt</i>
            <p>Task # 2</p>
          </Link>
        </li>
        <li
          class="nav-item"
          :class="
            $page.component == 'Users/AuthorCategoryBooks'
              ? 'active'
              : ''
          "
        >
          <Link class="nav-link" :href="route('admin.category.auther.books')">
            <i class="material-icons">people_alt</i>
            <p>Task # 1</p>
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      toggleSettingsItem: false,
    };
  },

  created() {
    if (
      this.$page.component == "GeneralInformation/GeneralInfo" ||
      this.$page.component == "GeneralInformation/UpdateProfile"
    ) {
      this.toggleSettingsItem = true;
    }
  },
};
</script>
