@extends('theme.framework7.layouts.app')

@section('content')
  <div id="app">
    <!-- Statusbar -->
   	<home-component></home-component>
  </div>

  <!-- About Page Template -->
  <template id="page-about">
    <f7Page>
      <f7navbar title="About" back-link="Back"></f7navbar>
      <f7block-title>About My App</f7block-title>
      <f7block strong>
        <p>Here is About page!</p>
        <p>You can go <f7link back>back</f7link>.</p>
        <p>Mauris posuere sit amet metus id venenatis. Ut ante dolor, tempor nec commodo rutrum, varius at sem. Nullam ac nisi non neque ornare pretium. Nulla mauris mauris, consequat et elementum sit amet, egestas sed orci. In hac habitasse platea dictumst.</p>
        <p>Fusce eros lectus, accumsan eget mi vel, iaculis tincidunt felis. Nulla tincidunt pharetra sagittis. Fusce in felis eros. Nulla sit amet aliquam lorem, et gravida ipsum. Mauris consectetur nisl non sollicitudin tristique. Praesent vitae metus ac quam rhoncus mattis vel et nisi. Aenean aliquet, felis quis dignissim iaculis, lectus quam tincidunt ligula, et venenatis turpis risus sed lorem. Morbi eu metus elit. Ut vel diam dolor.</p>
      </f7block>
    </f7Page>
  </template>

  <!-- Form Page Template -->
  <template id="page-form">
    <f7Page>
      <f7navbar title="Form" back-link="Back"></f7navbar>
      <f7block-title>Form Example</f7block-title>
      <f7List form>
        <f7List-item>
          <f7label>Name</f7label>
          <f7input type="text" placeholder="Name"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>E-mail</f7label>
          <f7input type="email" placeholder="E-mail"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>URL</f7label>
          <f7input type="url" placeholder="URL"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Password</f7label>
          <f7input type="password" placeholder="Password"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Phone</f7label>
          <f7input type="tel" placeholder="Phone"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Gender</f7label>
          <f7input type="select">
            <option selected>Male</option>
            <option>Female</option>
          </f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Birth date</f7label>
          <f7input type="date" placeholder="Birth date" value="2014-04-30"></f7input>
        </f7List-item>
        <f7List-item title="Toggle">
          <f7toggle slot="after"></f7toggle>
        </f7List-item>
        <f7List-item>
          <f7label>Slider</f7label>
          <f7input>
            <f7range min="0" max="100" value="50" step="1" :label="true"></f7range>
          </f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Textarea</f7label>
          <f7input type="textarea" placeholder="Bio"></f7input>
        </f7List-item>
        <f7List-item>
          <f7label>Resizable</f7label>
          <f7input type="textarea" placeholder="Bio" resizable></f7input>
        </f7List-item>
      </f7List>

      <f7block-title>Checkbox group</f7block-title>
      <f7List form>
        <f7List-item v-for="n in 3" :key="n" checkbox name="my-checkbox" :value="n" :title="'Checkbox ' + n"></f7List-item>
      </f7List>

      <f7block-title>Radio buttons group</f7block-title>
      <f7List form>
        <f7List-item v-for="n in 3" :key="n" radio name="my-radio" :checked="n === 1" :value="n" :title="'Radio ' + n"></f7List-item>
      </f7List>

      <f7block-title>Buttons</f7block-title>
      <f7block strong>
        <f7row tag="p">
          <f7button class="col">Button</f7button>
          <f7button class="col" fill>Fill</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" raised>Raised</f7button>
          <f7button class="col" raised fill>Raised Fill</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" round>Round</f7button>
          <f7button class="col" round fill>Round Fill</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" outline>Outline</f7button>
          <f7button class="col" round outline>Outline Round</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" small outline>Small</f7button>
          <f7button class="col" small round outline>Small Round</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" small fill>Small</f7button>
          <f7button class="col" small round fill>Small Round</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" big raised>Big</f7button>
          <f7button class="col" big fill raised>Big Fill</f7button>
        </f7row>
        <f7row tag="p">
          <f7button class="col" big fill raised color="red">Big Red</f7button>
          <f7button class="col" big fill raised color="green">Big Green</f7button>
        </f7row>
      </f7block>
    </f7Page>
  </template>

  <!-- Dynamic Routing Page Template -->
  <template id="page-dynamic-routing">
    <f7Page>
      <f7navbar title="Dynamic Route" back-link="Back"></f7navbar>
      <f7block strong>
        <ul>
          <li><b>Url:</b> @{{$f7oute.url}}</li>
          <li><b>Path:</b> @{{$f7oute.path}}</li>
          <li><b>Hash:</b> @{{$f7oute.hash}}</li>
          <li><b>Params:</b>
            <ul>
              <li v-for="(value, key) in $f7oute.params" :key="key"><b>@{{key}}:</b> @{{value}}</li>
            </ul>
          </li>
          <li><b>Query:</b>
            <ul>
              <li v-for="(value, key) in $f7oute.query" :key="key"><b>@{{key}}:</b> @{{value}}</li>
            </ul>
          </li>
          <li><b>Route:</b> @{{$f7oute.route}}</li>
        </ul>
      </f7block>
      <f7block strong>
        <f7link @click="$f7outer.back()">Go back via Router API</f7link>
      </f7block>
    </f7Page>
  </template>

  <!-- Page Not Found Template -->
  <template id="page-not-found">
    <f7Page>
      <f7navbar title="Not found" back-link="Back"></f7navbar>
      <f7block strong>
        <p>Sorry</p>
        <p>Requested content not found.</p>
      </f7block>
    </f7Page>
  </template>

@stop

