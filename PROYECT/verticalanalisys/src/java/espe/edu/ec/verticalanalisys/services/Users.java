/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import java.sql.SQLException;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Produces;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author jorge, jess, david
 */
@Path("user")
public class Users {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of User
     */
    public Users() {
    }
    
    

    /**
     * Retrieves representation of an instance of espe.edu.ec.verticalanalisys.services.User
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.User
     */
    @Path("{id_user}/{name_user}/{pass_user}/{id_company}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public boolean registerDataUsers(@PathParam("id_user") String id_user, @PathParam("name_user") String name_user, @PathParam("pass_user") String pass_user, @PathParam("id_company") String id_company) throws SQLException {
        boolean confirm;
        DBConnect db= new DBConnect();
        if(confirm=db.confirmConnect()){
            db.insertUser(id_user, name_user, pass_user, id_company);  
        }else
            confirm=false;  
        
        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of User
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(espe.edu.ec.verticalanalisys.hardware.User content) {
    }
    
    /**
     *
     * @param user
     * @return
     * @throws SQLException
     */
    
    

}
