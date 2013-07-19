## Custom 404 for Kohana 3.3

This simple module basically implements [the custom 404 example from the Kohana 3.3 Userguide](http://kohanaframework.org/3.3/guide/kohana/errors#http-exception-handling) for you at the module level.

It aims to make it as easy as possible to integrate the 404 page into your current setup by setting 404 errors to subrequest a customizable URI, while still returning a 404 status. You can then generate that page however you choose, or use/overwrite the simple default controller that comes with the module.

Setup
----------
Install like any other Kohana module:

1. Clone or download it into your Kohana modules folder.
2. Add it to the Kohana::modules call in bootstrap.php in your application folder.
[See the Kohana documentation for more detailed instructions](http://kohanaframework.org/3.3/guide/kohana/modules)

Usage
----------

By default, the module points 404s to the URI 'errors/404' and contains a Controller_Error with Action_404, so if you're using the default route you should see 'Page not found' on your 404s now.

Now you can copy Controller_Errors into your application folder and customize the 404 page however you choose.

Or, if you'd like to change the URI and use your own controller/route, copy the Custom404 class and set $subrequest to whatever you like.