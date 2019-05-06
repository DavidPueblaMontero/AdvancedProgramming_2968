using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace WebApplicationREST.Models
{
    public class Users
    {
        public int id_user { get; set; }
        public string name_user { get; set; }
        public string age_user { get; set; }
        public string phone_user { get; set; }
        public string address_user { get; set; }
        public string error { get; set; }
        public Users()
        {

        }
        public Users(int id_user, string name_user, string age_user, string phone_user, string address_user, string error)
        {
            this.id_user = id_user;
            this.name_user = name_user;
            this.age_user = age_user;
            this.phone_user = phone_user;
            this.address_user = address_user;
            this.error = error;
        }
    }
}