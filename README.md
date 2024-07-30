# windclock_clientside
Sample usage of the windklok api v2.
Three options given here, although the raw html example should be avoided since it exposes url and credentials.

# Example: raw html
see file weather_data.html [weather_data.html](https://github.com/TLR1000/windclock_clientside/blob/main/weather_data.html) for sample usage. 

# Example: using wordpress
To implement the API call and information display in a WordPress site, you can use a combination of custom code and plugins. 

### Step 1: create the plugin
- Create a new folder in the wp-content/plugins directory, e.g., weather-data.
- Create a PHP file in this folder, e.g., weather-data.php. See file [weather_data.php](https://github.com/TLR1000/windclock_clientside/blob/main/weather_data.php) for contents.

### Step 2: Activate the Plugin
- Go to the WordPress admin dashboard.
- Navigate to Plugins > Installed Plugins.
- Find your Weather Data plugin and click Activate.

### Step 3: Add the Shortcode to a WP Page or Post:
- Edit the page or post where you want to display the weather data.
- Add the shortcode [weather_data] to the content area.

### Step 4: Style the Output
You can add custom CSS to style the output as desired. Here’s an example of how to do this:

Create a Custom CSS File:
- Add a custom CSS file to your theme or use the theme’s custom CSS option.
- Add the following CSS to style the data container:
```
.data-container {
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
}

.data-item {
    margin-bottom: 10px;
    font-size: 16px;
}
```
# Example: using a server-side proxy
Create a server-side script in a language like Node.js, Python, PHP, etc., that handles the API request.   
This script will include the access key and make the request to the Google Apps Script endpoint.   
- Call the Server-Side Script from the Front-End:
- Your front-end JavaScript will call the server-side script instead of the Google Apps Script directly.

Here’s an example using Node.js with Express:

- Install Express: `NPM install express`
- Create server.js: see file [server.js](https://github.com/TLR1000/windclock_clientside/blob/main/server.js)
- Run the Node.js Server: `node server.js`
- Make the call in the html like in [weather_data_via_proxy.html](https://github.com/TLR1000/windclock_clientside/blob/main/weather_data_via_proxy.html)


