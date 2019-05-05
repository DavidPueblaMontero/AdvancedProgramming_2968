using System;
using System.Collections.Generic;
using System.Linq;
using System.Web.Http;
using MySql.Data.MySqlClient;

namespace WebApplicationREST
{
    public static class WebApiConfig
    {
        public static MySqlConnection conn()
        {
            string conn_string = "server=localhost;port=3306;database=restnet;username=root;password=11023650";
            MySqlConnection conn = new MySqlConnection(conn_string);
            return conn;
        }
        public static void Register(HttpConfiguration config)
        {
            // Web API configuration and services

            // Web API routes
            config.MapHttpAttributeRoutes();

            config.Routes.MapHttpRoute(
                name: "DefaultApi",
                routeTemplate: "{controller}/{id}",
                defaults: new { id = RouteParameter.Optional }
            );
        }
    }
}
