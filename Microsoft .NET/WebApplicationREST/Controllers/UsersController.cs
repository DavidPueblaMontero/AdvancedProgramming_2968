using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using MySql.Data.MySqlClient;
using WebApplicationREST.Models;

namespace WebApplicationREST.Controllers
{
    public class UsersController : ApiController
    {
        // GET users/values
        public List<Users> Get()
        {
            MySqlConnection conn = WebApiConfig.conn();

            MySqlCommand query = conn.CreateCommand();
            query.CommandText = "Select * from users";

            var users = new List<Users>();

            try
            {
                conn.Open();
            }
            catch (MySql.Data.MySqlClient.MySqlException ex)
            {
                users.Add(new Users(null, null, null, null, null, ex.ToString()));
            }

            MySqlDataReader fetch_query = query.ExecuteReader();

            while (fetch_query.Read())
            {
                users.Add(new Users(fetch_query["id_user"].ToString(), fetch_query["name_user"].ToString(), fetch_query["age_user"].ToString(), fetch_query["phone_user"].ToString(), fetch_query["address_user"].ToString(), null));
            }
            return users;
        }

        // GET api/values/5
        public Users Get(int id)
        {
            MySqlConnection conn = WebApiConfig.conn();

            MySqlCommand query = conn.CreateCommand();
            query.CommandText = "Select * from users where id_user = @id";
            query.Parameters.AddWithValue("@id", id);

            var users = new Users();

            try
            {
                conn.Open();
            }
            catch (MySql.Data.MySqlClient.MySqlException ex)
            {
                users = new Users(null, null, null, null, null, ex.ToString());
            }

            MySqlDataReader fetch_query = query.ExecuteReader();

            while (fetch_query.Read())
            {
                users = new Users(fetch_query["id_user"].ToString(), fetch_query["name_user"].ToString(), fetch_query["age_user"].ToString(), fetch_query["phone_user"].ToString(), fetch_query["address_user"].ToString(), null);
            }
            return users;
        }

        // POST api/values
        public void Post([FromBody]dynamic value)
        {
        }

        // PUT api/values/5
        public void Put(int id, [FromBody]string value)
        {
        }

        // DELETE api/values/5
        public void Delete(int id)
        {
        }
    }
}
