<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
<loc>{{ url('/') }}</loc>
<priority>1.00</priority>
</url>
@foreach(bp_menu() as $menu)
  <url>
    <loc>{{ url(formatUrl($menu->menu_link)) }}</loc>
    <priority>0.80</priority>
  </url>
@endforeach
@foreach($posts as $p)
    <url>
        <loc>{{url( formatUrl($p->title)) }}</loc>
        <priority>0.80</priority>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s+00:00', strtotime($p->updated_at))}}</lastmod>
    </url>
@endforeach
</urlset>