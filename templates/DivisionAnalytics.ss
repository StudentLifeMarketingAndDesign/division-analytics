<% if not $SiteConfig.DisableUITracking %>
  <script type="text/javascript">
  ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
     p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
     };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
     n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,"script","//radar-cdn.its.uiowa.edu/sp-static-js/2.7.2/radar-tracker.js","snowplow"));

  window.snowplow('newTracker', 'sp', 'radar-collector.its.uiowa.edu', {
     appId: '$SiteConfig.UITrackingID',
     cookieDomain: '.uiowa.edu',
     respectDoNotTrack: true,
     post: true,
     contexts: {
         webPage: true,
         performanceTiming: true
     }
  });

  window.snowplow('trackPageView');
  </script>
<% end_if %>
<% if $SiteConfig.GoogleAnalyticsID %>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '$SiteConfig.GoogleAnalyticsID', 'auto');
  ga('send', 'pageview');
</script>
<% end_if %>