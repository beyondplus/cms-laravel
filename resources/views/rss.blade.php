<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/">
  <channel>
    <title>Beyond Plus - CMS</title>
    <link>{{url('/')}}</link>
    <description>Online Learning Centre in Myanmar</description>
    <lastBuildDate>{{ gmdate('Y-m-d\TH:i:s+00:00', strtotime(date('d-m-Y h:m:s'))) }}Z</lastBuildDate>
    <image>
      <url>{{url('/images/32x32.png')}}</url>
      <title>Beyond Plus - CMS</title>
      <link>{{url('/')}}</link>
      <width>32</width>
      <height>32</height>
    </image> 
    @foreach($posts as $post)
    <item>
      <guid>{{base64_encode($post->id."beyondplus".time())}}</guid>
      <pubDate>{{ gmdate('Y-m-d\TH:i:s+00:00', strtotime(date('d-m-Y h:m:s'))) }}</pubDate>
      <dc:creator><![CDATA[Beyond Plus - Staff]]></dc:creator>
      <category><![CDATA[သတင္းမ်ား]]></category>
      <description>CMS in Myanmar</description>

      <content:encoded>
        <![CDATA[
        <!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <link rel="canonical" href="{{ url( formatUrl($post->title))  }}">
            <meta property="op:markup_version" content="v1.0">
            @if($post->screenshots != "screenshot.jpg")
              <meta property="og:image" content="{{url('uploads/video/thumbnails/'.$post->screenshots.'1.jpg')}}" />
            @endif
          </head>
          <body>
            <article>
              <header>
                <figure>
                  <figure>
                    @if($post->screenshots != "screenshot.jpg")
                      <img src="{{url('uploads/video/thumbnails/'.$post->screenshots.'1.jpg')}}" >
                    @else
                      <img src="{{url('uploads/video/thumbnails/'.$post->screenshots)}}" >
                    @endif
                  </figure>
                  <figcaption><h1>{{$post->title}} tutorial</h1></figcaption>
                </figure>
                <h1>{{$post->title}}</h1>
              </header>
                <h2>New Video Tutorial Come Out</h2>
                <p>{{$post->description}}...</p>
                <a href="{{ url( formatUrl($post->title))  }}">View Detial >>></a>
                @if($post->screenshots != "screenshot.jpg")
                  <figure class="op-slideshow">
                    <figure>
                      <img src="{{url('uploads/video/thumbnails/'.$post->screenshots.'2.jpg')}}" >
                    </figure>
                    <figure>
                      <img src="{{url('uploads/video/thumbnails/'.$post->screenshots.'3.jpg')}}" >
                    </figure>
                    <figure>
                      <img src="{{url('uploads/video/thumbnails/'.$post->screenshots.'1.jpg')}}" >
                    </figure>
                    <figcaption><h1>{{$post->title}} tutorial</h1></figcaption>
                  </figure>
                @endif
                
              <footer>
                <aside>
                  <p>Partner of <a href="http://beyondplus.net" rel="Beyondplus">Beyond Plus</a></p>
                  <p>78,6(B),Theingyi Street, Kyeemyinding, Yangon</p>
                </aside>
                <ul class="op-related-articles">
                  @foreach(bp_menu() as $menu)
                    <li><a href="{{url(formatUrl($menu->menu_link))}}">{{url(formatUrl($menu->menu_title))}}</a></li>
                  @endforeach
                </ul>
              </footer>
            </article>
          </body>
        </html>
        ]]>
      </content:encoded>
    </item>
    @endforeach
    
  </channel>
</rss>