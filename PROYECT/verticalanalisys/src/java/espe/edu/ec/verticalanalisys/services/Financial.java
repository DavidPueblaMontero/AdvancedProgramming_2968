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
import javax.ws.rs.Produces;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author david
 */
@Path("financial")
public class Financial {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Financial
     */
    public Financial() {
    }

    /**
     * Retrieves representation of an instance of espe.edu.ec.verticalanalisys.services.Financial
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.FinancialData
     */
    @Path("{id_financialData}/{id_company}/{year}/{sales}/{salesCost}/{grossProfit}/{expensesAdminSales}/{depreciations}/{interestPaid}/{profitBeforeTaxes}/{taxes}/{exerciseUtility}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public boolean registerDataFinancialValues(@PathParam("id_financialData") String id_financialData, @PathParam("id_company") String id_company, @PathParam("year") int year, @PathParam("sales") double sales, @PathParam("salesCost") double salesCost,
                                         @PathParam("grossProfit") double grossProfit,@PathParam("expensesAdminSales") double expensesAdminSales,@PathParam("depreciations") double depreciations,@PathParam("interestPaid") double interestPaid,@PathParam("profitBeforeTaxes") double profitBeforeTaxes,
                                         @PathParam("taxes") double taxes,@PathParam("exerciseUtility") double exerciseUtility) throws SQLException {
        boolean confirm;
        DBConnect db= new DBConnect();
        if(confirm=db.confirmConnect()){
            db.insertFinancialData(id_financialData, id_company, year,sales,salesCost,grossProfit,expensesAdminSales,depreciations,interestPaid,profitBeforeTaxes,taxes,exerciseUtility);
        }else
            confirm=false;  
        
        return confirm;
    }

    /**
     * PUT method for updating or creating an instance of Financial
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(FinancialData content) {
    }
}
