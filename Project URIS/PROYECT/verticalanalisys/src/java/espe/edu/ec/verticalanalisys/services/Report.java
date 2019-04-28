/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import espe.edu.ec.verticalanalisys.hardware.FinancialReport;
import java.sql.SQLException;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.Produces;
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
@Path("report")
public class Report {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Report
     */
    public Report() {
    }

    /**
     * Retrieves representation of an instance of espe.edu.ec.verticalanalisys.services.Report
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.FinancialReport
     */
    @Path("{id_company}/{year}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public FinancialReport returnValues(@PathParam("id_company") String id_company, @PathParam("year") int year) throws SQLException {
        FinancialReport finreport;
        DBConnect db=new DBConnect();
        finreport=db.report(id_company, year);
        return finreport;
        
        
    }
}
