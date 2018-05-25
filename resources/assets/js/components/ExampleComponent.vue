<template>
    <div>
        <f7List>
      <!-- Additional "radio" prop to enable radio list item -->
          <f7ListItem radio value="check_1" name="demo-radio" checked title="Radio 1"></f7ListItem>
          <f7ListItem radio value="check_2" name="demo-radio" title="Radio 2"></f7ListItem>
        </f7List>
        <f7Panel right reveal>
            <f7View>
              <f7Page>
                <f7Navbar title="Right Panel"></f7Navbar>
                  <p>Here comes the right panel text</p>
              </f7Page>
            </f7View>
          </f7Panel>
    </div>
    
</template>

<script>
    import {f7List, f7ListItem, f7Panel,f7View,f7Page,f7Navbar} from 'framework7-vue'
    export default {
        components: {
            f7List, f7ListItem, 
          f7Panel,
          f7View,
          f7Page,
          f7Navbar
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>