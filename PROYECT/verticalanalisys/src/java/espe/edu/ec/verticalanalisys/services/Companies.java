/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import espe.edu.ec.verticalanalisys.hardware.Company;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
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
@Path("companies")
public class Companies {

    boolean confirm;
    DBConnect db = new DBConnect();
    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Companies
     */
    public Companies() {
    }

    /**
     * Retrieves representation of an instance of
     * espe.edu.ec.verticalanalisys.services.Companies
     *
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.Company
     */
    
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    public boolean registerCompanies(Company objCompany) throws SQLException {
        if (confirm = db.confirmConnect()) {
            db.insertRegister(objCompany, "company");
        } else {
            confirm = false;
        }
        return confirm;
    }
    
    @Path("{id_company}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public Company showById(@PathParam("id_company") String id) throws SQLException {

        Company company;
        company = (Company) db.showRegisterById(id, "company", "id_company");
        return company;
    }
    
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public ArrayList showCompaniesList() throws SQLException {

        ArrayList <Company> company;
        company=db.showRegisterList("company");
        return company;
    }

    @Path("{id_company}")
    @DELETE
    @Produces(MediaType.APPLICATION_JSON)
    public boolean deleteById(@PathParam("id_company") String id) throws SQLException {

        if (confirm = db.confirmConnect()) {
            db.deleteRegisterById(id, "company", "id_company");

        } else {
            confirm = false;
        }

        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of Companies
     *
     * @param content representation for the resource
     */
    @Path("{id_company}")
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public boolean modifyById(Company objCompany,@PathParam("id_company") String id) throws SQLException{
        if (confirm = db.confirmConnect()) {
            db.modifyRegisterById(objCompany,"company", id);
        } else {
            confirm = false;
        }

        return confirm;
        
    }
}
