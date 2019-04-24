/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.connecction;

import espe.edu.ec.verticalanalisys.hardware.FinancialReport;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author jorge
 */
public class DBConnect {
    Connection ct;
    String bd= "verticalanalisys";
    String url="jdbc:mysql://financialreport.ddns.net/"+bd;
    String user="root";
    String pass="11023650";
    
    public Connection connect(){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            ct=(Connection) DriverManager.getConnection(url,user,pass);  
            System.out.println("Successful connection");
        } catch (ClassNotFoundException|SQLException ex) {
            System.out.println("ERROR");
        }
        return ct;
    }
    public boolean confirmConnect(){
        boolean confirm;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            ct=(Connection) DriverManager.getConnection(url,user,pass);  
            confirm=true;
        } catch (ClassNotFoundException|SQLException ex) {
            confirm=false;
        }
        return confirm;
    }
    
    public void insertUser (String id_user, String name_user, String pass_user,String id_company) throws SQLException{
        String query;
        DBConnect connect=new DBConnect();
        String table="user";
        query="INSERT INTO "+table+" (id_user,name_user,pass_user,id_company) values (?,?,?,?)";
        try (PreparedStatement state = connect.connect().prepareStatement(query)) {
            state.setString(1,id_user);
            state.setString(2,name_user);
            state.setString(3,pass_user);
            state.setString(4,id_company);
            state.executeUpdate();
        }
    
    }
    public void insertCompany (String id_company, String name_company, String description_company,String address_company, String phone_company) throws SQLException{
        String query;
        DBConnect connect=new DBConnect();
        String table="company";
        query="INSERT INTO "+table+" (id_company,name_company,description_company,address_company,phone_company) values (?,?,?,?,?)";
        try (PreparedStatement state = connect.connect().prepareStatement(query)) {
            state.setString(1,id_company);
            state.setString(2,name_company);
            state.setString(3,description_company);
            state.setString(4,address_company);
            state.setString(5,phone_company);
            state.executeUpdate();
        }
    
    }
    public void insertFinancialData (String id_financialData, String id_company, int year,double sales,double salesCost,double grossProfit,
                                    double expensesAdmiSales,double depreciations, double interestPaid,double profitBeforeTaxes,double taxes,double excerciseUtility) throws SQLException{
        String query;
        DBConnect connect=new DBConnect();
        String table="financialdata";
        query="INSERT INTO "+table+" (id_financialData,id_company,year,sales,salesCost,grossProfit,expensesAdmiSales,depreciations,interestPaid,profitBeforeTaxes,taxes,excerciseUtility) values (?,?,?,?,?,?,?,?,?,?,?,?)";
        try (PreparedStatement state = connect.connect().prepareStatement(query)) {
            state.setString(1,id_financialData);
            state.setString(2,id_company);
            state.setInt(3,year);
            state.setDouble(4,sales);
            state.setDouble(5,salesCost);
            state.setDouble(6,grossProfit);
            state.setDouble(7,expensesAdmiSales);
            state.setDouble(8,depreciations);
            state.setDouble(9,interestPaid);
            state.setDouble(10,profitBeforeTaxes);
            state.setDouble(11,taxes);
            state.setDouble(12,excerciseUtility);
            state.executeUpdate();
        }
    
    }
    public FinancialReport report(String id_company,int year) throws SQLException{
        FinancialReport finreport=null;
        String query;
        DBConnect connect=new DBConnect();
        String table="financialdata";
        query="SELECT * FROM "+table+" Where id_company= ? and year=?";
        PreparedStatement state= connect.connect().prepareStatement(query);
        state.setString(1,id_company);  
        state.setInt(2,year);  
        ResultSet rs=state.executeQuery();
        
        while (rs.next()){
            double sales= 100;
            double salesCost=(rs.getDouble("salesCost")/rs.getDouble("sales"))*100;
            double grossProfit=(rs.getDouble("grossProfit")/rs.getDouble("sales"))*100;
            double expensesAdmiSales=(rs.getDouble("expensesAdmiSales")/rs.getDouble("sales"))*100;
            double depreciations=(rs.getDouble("depreciations")/rs.getDouble("sales"))*100;
            double interestPaid=(rs.getDouble("interestPaid")/rs.getDouble("sales"))*100;
            double profitBeforeTaxes=(rs.getDouble("profitBeforeTaxes")/rs.getDouble("sales"))*100;
            double taxes=(rs.getDouble("taxes")/rs.getDouble("sales"))*100;
            double excerciseUtility=(rs.getDouble("excerciseUtility")/rs.getDouble("sales"))*100;
            finreport=new FinancialReport(id_company,sales, salesCost, grossProfit, expensesAdmiSales, depreciations, interestPaid, profitBeforeTaxes, taxes, excerciseUtility);
            
            
            
            
            
          
            
            
        
    }
        rs.close();
        state.close();
           
        return finreport;
    }
    
    
    public static void main(String[] args){
        DBConnect c= new DBConnect();
        c.connect();
    }
    
        
    
    
    
}
