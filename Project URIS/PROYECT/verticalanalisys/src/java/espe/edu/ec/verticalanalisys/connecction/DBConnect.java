/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.connecction;

import espe.edu.ec.verticalanalisys.hardware.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;


/**
 *
 * @author jorge, jess, david
 */
public class DBConnect {

    Connection ct;
    String bd = "verticalanalisys";
    String url = "jdbc:mysql://financialreport.ddns.net/" + bd;
    String user = "root";
    String pass = "11023650";

    public Connection connect() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            ct = (Connection) DriverManager.getConnection(url, user, pass);
            System.out.println("Successful connection");
        } catch (ClassNotFoundException | SQLException ex) {
            System.out.println("ERROR");
        }
        return ct;
    }

    public boolean confirmConnect() {
        boolean confirm;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            ct = (Connection) DriverManager.getConnection(url, user, pass);
            confirm = true;
        } catch (ClassNotFoundException | SQLException ex) {
            confirm = false;
        }
        return confirm;
    }

    public void insertRegister(Object obj, String table) throws SQLException {
        DBConnect connect = new DBConnect();
        String query;
        PreparedStatement state;
        switch (table) {
            case "user":
                User user = (User) obj;
                query = "INSERT INTO " + table + " (id_user,name_user,pass_user,id_company) values (?,?,?,?)";
                state = connect.connect().prepareStatement(query);
                state.setString(1, user.getId_user());
                state.setString(2, user.getName_user());
                state.setString(3, user.getPass_user());
                state.setString(4, user.getId_company());
                state.executeUpdate();

                break;
            case "company":
                Company company = (Company) obj;
                query = "INSERT INTO " + table + " (id_company,name_company,description_company,address_company,phone_company) values (?,?,?,?,?)";
                state = connect.connect().prepareStatement(query);
                state.setString(1, company.getId_company());
                state.setString(2, company.getName_company());
                state.setString(3, company.getDescription_company());
                state.setString(4, company.getAddress_company());
                state.setString(5, company.getPhone_company());
                state.executeUpdate();

                break;
            case "financialdata":
                FinancialData financial = (FinancialData) obj;
                query = "INSERT INTO " + table + " (id_financialData,id_company,year,sales,salesCost,grossProfit,expensesAdmiSales,depreciations,interestPaid,profitBeforeTaxes,taxes,excerciseUtility) values (?,?,?,?,?,?,?,?,?,?,?,?)";
                state = connect.connect().prepareStatement(query);
                state.setString(1, financial.getId_finanacialData());
                state.setString(2, financial.getId_company());
                state.setInt(3, financial.getYear());
                state.setDouble(4, financial.getSales());
                state.setDouble(5, financial.getSalesCost());
                state.setDouble(6, financial.getGrossProfit());
                state.setDouble(7, financial.getExpensesAdmiSales());
                state.setDouble(8, financial.getDepreciations());
                state.setDouble(9, financial.getInterestPaid());
                state.setDouble(10, financial.getProfitBeforeTaxes());
                state.setDouble(11, financial.getTaxes());
                state.setDouble(12, financial.getExerciseUtility());
                state.executeUpdate();
                break;
            default:
                break;
        }

    }

    public void deleteRegisterById(String id, String table, String primary) throws SQLException {
        DBConnect connect = new DBConnect();
        String query;
        query = "DELETE from " + table + " where " + primary + " = ?";
        try (PreparedStatement state = connect.connect().prepareStatement(query)) {
            state.setString(1, id);
            state.executeUpdate();
        }
    }
    
    public void modifyRegisterById(Object obj,String table,String id) throws SQLException{
        DBConnect connect = new DBConnect();
        String query;
        PreparedStatement state;
        switch (table) {
            case "user":
                User user = (User) obj;
                query = "UPDATE " + table + " SET name_user=?,pass_user=?,id_company=? where id_user=?";
                state = connect.connect().prepareStatement(query);
                state.setString(1, user.getName_user());
                state.setString(2, user.getPass_user());
                state.setString(3, user.getId_company());
                state.setString(4, id);
                state.executeUpdate();

                break;
            case "company":
                Company company = (Company) obj;
                query = "UPDATE " + table + " SET name_company=?,description_company=?,address_company=?,phone_company=? where id_company=?";
                state = connect.connect().prepareStatement(query);
                state.setString(1, company.getName_company());
                state.setString(2, company.getDescription_company());
                state.setString(3, company.getAddress_company());
                state.setString(4, company.getPhone_company());
                state.setString(5, id);
                state.executeUpdate();

                break;
            case "financialdata":
                FinancialData financial = (FinancialData) obj;
                query = "UPDATE " + table + " SET id_company=?,year=?,sales=?,salesCost=?,grossProfit=?,expensesAdmiSales=?,depreciations=?,interestPaid=?,profitBeforeTaxes=?,taxes=?,excerciseUtility=? where id_financialData=?";
                state = connect.connect().prepareStatement(query);
                state.setString(1, financial.getId_company());
                state.setInt(2, financial.getYear());
                state.setDouble(3, financial.getSales());
                state.setDouble(4, financial.getSalesCost());
                state.setDouble(5, financial.getGrossProfit());
                state.setDouble(6, financial.getExpensesAdmiSales());
                state.setDouble(7, financial.getDepreciations());
                state.setDouble(8, financial.getInterestPaid());
                state.setDouble(9, financial.getProfitBeforeTaxes());
                state.setDouble(10, financial.getTaxes());
                state.setDouble(11, financial.getExerciseUtility());
                state.setString(12, id);
                state.executeUpdate();
                break;
            default:
                break;
        }

        
    }

    public Object showRegisterById(String id, String table, String primary) throws SQLException {
        DBConnect connect = new DBConnect();
        String query;
        query = "SELECT * from " + table + " where " + primary + " = ?";
        PreparedStatement state = connect.connect().prepareStatement(query);
        state.setString(1, id);
        ResultSet rs = state.executeQuery();
        User user = null;
        Company company = null;
        FinancialData financialData = null;

        while (rs.next()) {
            switch (table) {
                case "user":
                    user = new User(rs.getString("id_user"), rs.getString("name_user"), rs.getString("pass_user"), rs.getString("id_company"));
                    break;
                case "company":
                    company = new Company(rs.getString("id_company"), rs.getString("name_company"), rs.getString("description_company"), rs.getString("address_company"), rs.getString("phone_company"));
                    break;
                case "financialdata":
                    financialData = new FinancialData(rs.getString("id_financialData"), rs.getString("id_company"), rs.getInt("year"), rs.getDouble("sales"), rs.getDouble("salesCost"), rs.getDouble("grossProfit"), rs.getDouble("expensesAdmiSales"), rs.getDouble("depreciations"), rs.getDouble("interestPaid"), rs.getDouble("profitBeforeTaxes"), rs.getDouble("taxes"), rs.getDouble("excerciseUtility"));
                    break;
                default:
                    break;
            }
        }
        rs.close();
        state.close();
        switch (table) {
            case "user":
                return user;
            case "company":
                return company;
            case "financialdata":
                return financialData;
            default:
                return null;
        }
    }

    public ArrayList showRegisterList(String table) throws SQLException {
        DBConnect connect = new DBConnect();
        String query;
        query = "SELECT * from " + table;
        PreparedStatement state = connect.connect().prepareStatement(query);
        ResultSet rs = state.executeQuery();
        User temporaryUser;
        Company temporaryCompany;
        FinancialData temporaryFinancialData;
        ArrayList <User> user= new ArrayList();
        ArrayList <Company> company = new ArrayList();
        ArrayList <FinancialData> financialData = new ArrayList();

        while (rs.next()) {
            switch (table) {
                case "user":
                    temporaryUser = new User(rs.getString("id_user"), rs.getString("name_user"), rs.getString("pass_user"), rs.getString("id_company"));
                    user.add(temporaryUser);
                    break;
                case "company":
                    temporaryCompany = new Company(rs.getString("id_company"), rs.getString("name_company"), rs.getString("description_company"), rs.getString("address_company"), rs.getString("phone_company"));
                    company.add(temporaryCompany);
                    break;
                case "financialdata":
                    temporaryFinancialData = new FinancialData(rs.getString("id_financialData"), rs.getString("id_company"), rs.getInt("year"), rs.getDouble("sales"), rs.getDouble("salesCost"), rs.getDouble("grossProfit"), rs.getDouble("expensesAdmiSales"), rs.getDouble("depreciations"), rs.getDouble("interestPaid"), rs.getDouble("profitBeforeTaxes"), rs.getDouble("taxes"), rs.getDouble("excerciseUtility"));
                    financialData.add(temporaryFinancialData);
                    break;
                default:
                    break;
            }
        }
        rs.close();
        state.close();
        switch (table) {
            case "user":
                return user;
            case "company":
                return company;
            case "financialdata":
                return financialData;
            default:
                return null;
        }
    }
    public FinancialReport calculateValues(String id_company, int year) throws SQLException {
        DBConnect connect = new DBConnect();
        FinancialReport finreport = null;
        String query;
        String table = "financialdata";
        query = "SELECT * FROM " + table + " Where id_company= ? and year=?";
        PreparedStatement state = connect.connect().prepareStatement(query);
        state.setString(1, id_company);
        state.setInt(2, year);
        ResultSet rs = state.executeQuery();

        while (rs.next()) {
            double sales = 100;
            double salesCost = (rs.getDouble("salesCost") / rs.getDouble("sales")) * 100;
            double grossProfit = (rs.getDouble("grossProfit") / rs.getDouble("sales")) * 100;
            double expensesAdmiSales = (rs.getDouble("expensesAdmiSales") / rs.getDouble("sales")) * 100;
            double depreciations = (rs.getDouble("depreciations") / rs.getDouble("sales")) * 100;
            double interestPaid = (rs.getDouble("interestPaid") / rs.getDouble("sales")) * 100;
            double profitBeforeTaxes = (rs.getDouble("profitBeforeTaxes") / rs.getDouble("sales")) * 100;
            double taxes = (rs.getDouble("taxes") / rs.getDouble("sales")) * 100;
            double excerciseUtility = (rs.getDouble("excerciseUtility") / rs.getDouble("sales")) * 100;
            finreport = new FinancialReport(id_company, sales, salesCost, grossProfit, expensesAdmiSales, depreciations, interestPaid, profitBeforeTaxes, taxes, excerciseUtility);

        }
        rs.close();
        state.close();

        return finreport;
    }

    public static void main(String[] args) throws SQLException {
        DBConnect c = new DBConnect();
        c.connect();
        
    }

}
