<template>
  <f7-page>
    <f7-navbar title="Not found" back-link="Back"></f7-navbar>
    <f7-block strong>
      <p>Sorry</p>
      <p>Requested content not found.</p>
    </f7-block>
  </f7-page>

</template>

<script>
import {f7List, f7ListItem, f7Panel,f7View,f7Page,f7Navbar,f7Statusbar,f7BlockTitle,f7Block,f7NavLeft,f7Link,f7NavTitle,f7NavRight,f7Toolbar,f7Row,f7Col,f7Button,f7Popup,f7LoginScreen,f7LoginScreenTitle,f7Label,f7Input,f7ListButton,f7BlockFooter} from 'framework7-vue'
  export default {
    components: {
      f7List, f7ListItem, 
      f7Panel,
      f7View,
      f7Page,
      f7Navbar,
      f7Statusbar,f7BlockTitle,f7Block,f7NavLeft,f7Link,f7NavTitle,f7NavRight,f7Toolbar,f7Row,f7Col,f7Button,f7Popup,f7LoginScreen,f7LoginScreenTitle,f7Label,f7Input,f7ListButton,f7BlockFooter
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>