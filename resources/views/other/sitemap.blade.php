
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

    <url>
        <loc>{{ route('index') }}</loc>
    </url>

    @foreach($blogs as $blog)
        <url>
            <loc>{{ route('blog.details', $blog->slug) }}</loc>
        </url>
    @endforeach
</urlset>
