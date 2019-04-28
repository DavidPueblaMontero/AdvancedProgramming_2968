/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import espe.edu.ec.verticalanalisys.hardware.FinancialData;
import java.sql.SQLException;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.Produces;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author david, jess, david
 */
@Path("financial")
public class Financial {

    boolean confirm;
    DBConnect db = new DBConnect();
    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Financial
     */
    public Financial() {
    }

    /**
     * Retrieves representation of an instance of
     * espe.edu.ec.verticalanalisys.services.Financial
     *
     * @return an instance of
     * espe.edu.ec.verticalanalisys.hardware.FinancialData
     */
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    public boolean registerFinancial(FinancialData objfinancial) throws SQLException {
        if (confirm = db.confirmConnect()) {
            db.insertRegister(objfinancial, "financialdata");
        } else {
            confirm = false;
        }

        return confirm;
    }

    @Path("{id_financialData}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public FinancialData showById(@PathParam("id_financialData") String id) throws SQLException {

        FinancialData financialdata;
        financialdata = (FinancialData) db.showRegisterById(id, "financialdata", "id_financialData");
        return financialdata;
    }

    @Path("{id_financialData}")
    @DELETE
    @Produces(MediaType.APPLICATION_JSON)
    public boolean deleteById(@PathParam("id_financialData") String id) throws SQLException {

        if (confirm = db.confirmConnect()) {
            db.deleteRegisterById(id, "financialdata", "id_financialData");

        } else {
            confirm = false;
        }

        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of Financial
     *
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(FinancialData content) {
    }
}
