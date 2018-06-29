<template>
  <f7-page>
    <f7-statusbar></f7-statusbar>



    <!-- Right Panel -->
    <f7-panel right cover theme-dark>
      <f7-view id="right-panel-view">
        <f7-page>
          <f7-navbar title="Right Panel" sliding></f7-navbar>
          <f7-block>
            <p>Right panel content goes here</p>
          </f7-block>
          <f7-block-title>Load page in panel</f7-block-title>
          <f7-list>
            <f7-list-item link="/about/" title="About"></f7-list-item>
            <f7-list-item link="/form/" title="Form"></f7-list-item>
          </f7-list>
          <f7-block-title>Load page in main view</f7-block-title>
          <f7-list>
            <f7-list-item link="/about/" title="About" view="#main-view" panel-close></f7-list-item>
            <f7-list-item link="/form/" title="Form" view="#main-view" panel-close></f7-list-item>
          </f7-list>
        </f7-page>
      </f7-view>
    </f7-panel>

    <!-- Main View -->
    <f7-view id="main-view" main>
      <f7-page>
        <f7-navbar>
          
          <f7-nav-title>Beyond Plus CMS</f7-nav-title>
          <f7-nav-right>
            <f7-link icon-if-ios="f7:menu" icon-if-md="material:menu" panel-open="right"></f7-link>
          </f7-nav-right>
        </f7-navbar>
        <f7-block strong>
          <p>Innovation Means Never Stop Learning.</p>
        </f7-block>
        <f7-block-title>Navigation</f7-block-title>
        <template v-for="post in posts">
          <f7-card :padding="true" >
            <f7-card-header>{{post.title}}</f7-card-header>
            <f7-card-content :padding="true">
              <p>{{post.body}}</p>
              <img v-bind:src="'/uploads/'+post.featured_img" class="lazy lazy-fade-in img-responsive">
            </f7-card-content>
          </f7-card>
        </template>
        <f7-list>
          <f7-list-item link="/about/" title="About"></f7-list-item>
          <f7-list-item link="/form/" title="Form"></f7-list-item>
        </f7-list>
        <f7-block-title>Modals</f7-block-title>
        <f7-block strong>
          <f7-row>
            <f7-col width="50">
              <f7-button fill raised popup-open="#popup">Popup</f7-button>
            </f7-col>
            <f7-col width="50">
              <f7-button fill raised login-screen-open="#login-screen">Login Screen</f7-button>
            </f7-col>
          </f7-row>
        </f7-block>
        <f7-block-title>Panels</f7-block-title>
        <f7-block strong>
          <f7-row>
            <f7-col width="50">
              <f7-button fill raised panel-open="right">Right Panel</f7-button>
            </f7-col>
          </f7-row>
        </f7-block>
        <f7-list>
          <f7-list-item link="/dynamic-route/blog/45/post/125/?foo=bar#about" title="Dynamic Route"></f7-list-item>
          <f7-list-item link="/load-something-that-doesnt-exist/" title="Default Route (404)"></f7-list-item>
        </f7-list>
      </f7-page>
    </f7-view>

    <!-- Popup -->
    <f7-popup id="popup">
      <f7-view>
        <f7-page>
          <f7-navbar title="Popup">
            <f7-nav-right>
              <f7-link popup-close>Close</f7-link>
            </f7-nav-right>
          </f7-navbar>
          <f7-block>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, architecto. Cupiditate laudantium rem nesciunt numquam, ipsam. Voluptates omnis, a inventore atque ratione aliquam. Omnis iusto nemo quos ullam obcaecati, quod.</f7-block>
        </f7-page>
      </f7-view>
    </f7-popup>

    <!-- Login Screen -->
    <f7-login-screen id="login-screen">
      <f7-view>
        <f7-page login-screen>
          <f7-login-screen-title>Login</f7-login-screen-title>
          <f7-list form>
            <f7-list-item>
              <f7-label>Username</f7-label>
              <f7-input name="username" placeholder="Username" type="text"></f7-input>
            </f7-list-item>
            <f7-list-item>
              <f7-label>Password</f7-label>
              <f7-input name="password" type="password" placeholder="Password"></f7-input>
            </f7-list-item>
          </f7-list>
          <f7-list>
            <f7-list-button title="Sign In" login-screen-close></f7-list-button>
            <f7-block-footer>
              <p>Click Sign In to close Login Screen</p>
            </f7-block-footer>
          </f7-list>
        </f7-page>
      </f7-view>
    </f7-login-screen>
  </f7-page>

</template>

<script>
import axios from 'axios';
Vue.component('page-about',require('./PageAboutComponent.vue'));
  Vue.component('page-form', require('./PageFormComponent.vue'));
  Vue.component('page-dynamic-routing',require('./PageDynamicRoutingComponent.vue'));
  Vue.component('page-not-found', require('./PageNotFoundComponent.vue'));

  import {f7List, f7ListItem, f7Panel,f7View,f7Page,f7Navbar,f7Statusbar,f7BlockTitle,f7Block,f7NavLeft,f7Link,f7NavTitle,f7NavRight,f7Toolbar,f7Row,f7Col,f7Button,f7Popup,f7LoginScreen,f7LoginScreenTitle,f7Label,f7Input,f7ListButton,f7BlockFooter,f7Card, f7CardHeader, f7CardContent, f7CardFooter} from 'framework7-vue'
  export default {
    data() {
      return {
        posts: [{title : "" , body : "", featured_img : "default.jpg"}],
        errors: []
      }
    },
    components: {
      f7List, f7ListItem, 
      f7Panel,
      f7View,
      f7Page,
      f7Navbar,
      f7Statusbar,f7BlockTitle,f7Block,f7NavLeft,f7Link,f7NavTitle,f7NavRight,f7Toolbar,f7Row,f7Col,f7Button,f7Popup,f7LoginScreen,f7LoginScreenTitle,f7Label,f7Input,f7ListButton,f7BlockFooter,f7Card, f7CardHeader, f7CardContent, f7CardFooter
    },
      // Init Framework7 by passing parameters here
  
    framework7: {
      root: '#app', // App root element
      id: 'net.beyondplus.cms', // App bundle ID
      name: 'Framework7', // App name
      theme: 'auto', // Automatic theme detection
      // App routes
      routes: [
        {
          path: '/',
          component: 'example-component'
        },
        {
          path: '/about/',
          component: 'page-about'
        },
        {
          path: '/form/',
          component: 'page-form'
        },
        {
          path: '/dynamic-route/blog/:blogId/post/:postId/',
          component: 'page-dynamic-routing'
        },
        {
          path: '(.*)',
          component: 'page-not-found',
        },
      ],
    },
    methods : {
      postPost() {
        axios.post('/api/10')
          .then(response =>  {
            this.posts = response.data.data
          })
          .catch(e => {
            this.errors.push(e)
        })
      }
    },
    mounted() {
      this.postPost()
    }
  }
</script>