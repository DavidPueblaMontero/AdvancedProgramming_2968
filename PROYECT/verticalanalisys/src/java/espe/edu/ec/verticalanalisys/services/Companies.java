/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import espe.edu.ec.verticalanalisys.hardware.Company;
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
 * @author jorge
 */
@Path("companies")
public class Companies {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Companies
     */
    public Companies() {
    }

    /**
     * Retrieves representation of an instance of espe.edu.ec.verticalanalisys.services.Companies
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.Company
     */
    @Path("{id_company}/{name_company}/{description_company}/{address_company}/{phone_company}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public boolean registerDataCompanies(@PathParam("id_company") String id_company, @PathParam("name_company") String name_company, @PathParam("description_company") String description_company, @PathParam("address_company") String address_company, @PathParam("phone_company") String phone_company) throws SQLException {
        boolean confirm;
        DBConnect db= new DBConnect();
        if(confirm=db.confirmConnect()){
            db.insertCompany(id_company, name_company, description_company, address_company, phone_company);
        }else
            confirm=false;  
        
        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of Companies
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(Company content) {
    }
}
