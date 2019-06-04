/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import espe.edu.ec.verticalanalisys.hardware.*;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.ws.rs.Produces;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author jorge, jess, david
 */
@Path("users")
public class Users {

    boolean confirm;
    DBConnect db = new DBConnect();

    /**
     * Creates a new instance of User
     */
    public Users() {
    }

    /**
     * Retrieves representation of an instance of
     * espe.edu.ec.verticalanalisys.services.User
     *
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.User
     */
    @Path("{id_user}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public User showById(@PathParam("id_user") String id) throws SQLException {

        User user = (User) db.showRegisterById(id, "user", "id_user");
        return user;
    }

    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public ArrayList showUserList() throws SQLException {

        ArrayList<User> user;
        user = db.showRegisterList("user");
        return user;
    }

    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    public boolean registerUsers(User objUser) throws SQLException {
        if (confirm = db.confirmConnect()) {
            db.insertRegister(objUser, "user");
        } else {
            confirm = false;
        }

        return confirm;
    }

    @Path("{id_user}")
    @DELETE
    @Produces(MediaType.APPLICATION_JSON)
    public boolean deleteById(@PathParam("id_user") String id) throws SQLException {

        if (confirm = db.confirmConnect()) {
            db.deleteRegisterById(id, "user", "id_user");

        } else {
            confirm = false;
        }

        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of User
     *
     * @param content representation for the resource
     */
    @Path("{id_user}")
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public boolean modifyById(User objUser, @PathParam("id_user") String id) throws SQLException {
        if (confirm = db.confirmConnect()) {
            db.modifyRegisterById(objUser, "user", id);
        } else {
            confirm = false;
        }

        return confirm;

    }

    /**
     *
     * @param user
     * @return
     * @throws SQLException
     */
}
