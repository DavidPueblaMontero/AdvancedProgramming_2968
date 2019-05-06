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
        // GET users/
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

        // GET users/{id_user}
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

        // POST users/
        public bool Post([FromBody]Users userInfo)
        {

            MySqlConnection conn = WebApiConfig.conn();
            conn.Open();

            MySqlCommand insertCommand = new MySqlCommand(String.Format("INSERT into users (id_user, name_user, age_user, phone_user, address_user) values ('{0}','{1}','{2}','{3}','{4}')", userInfo.id_user, userInfo.name_user, userInfo.age_user, userInfo.phone_user, userInfo.address_user), conn);
            int execute = insertCommand.ExecuteNonQuery();
            if (execute == 1)
            {
                return true;
            }
            return false;
        }

        // PUT users/{id_user}
        public bool Put([FromBody]Users userInfo, int id)
        {
			MySqlConnection conn = WebApiConfig.conn();
			conn.Open();

			MySqlCommand insertCommand = new MySqlCommand(String.Format("UPDATE users SET name_user='"+userInfo.name_user+"',age_user='"+userInfo.age_user+"',phone_user='"+userInfo.phone_user+"',address_user='"+userInfo.address_user+"' WHERE id_user="+id), conn);
			int execute = insertCommand.ExecuteNonQuery();
			if (execute == 1)
			{
				return true;
			}
			return false;

		}

        // DELETE users/{id_user}
        public bool Delete(int id)
        {
			MySqlConnection conn = WebApiConfig.conn();
			conn.Open();

			MySqlCommand deleteCommand = new MySqlCommand(String.Format("DELETE FROM users where id_user='" + id + "'"), conn);
			int execute = deleteCommand.ExecuteNonQuery();
			if (execute == 1)
			{
				return true;
			}
			return false;

		}
    }
}
