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
import java.util.List;

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

    public void insertFinancialData(String id_financialData, String id_company, int year, double sales, double salesCost, double grossProfit,
            double expensesAdmiSales, double depreciations, double interestPaid, double profitBeforeTaxes, double taxes, double excerciseUtility) throws SQLException {
        DBConnect connect = new DBConnect();
        String query;
        String table = "financialdata";
        query = "INSERT INTO " + table + " (id_financialData,id_company,year,sales,salesCost,grossProfit,expensesAdmiSales,depreciations,interestPaid,profitBeforeTaxes,taxes,excerciseUtility) values (?,?,?,?,?,?,?,?,?,?,?,?)";
        try (PreparedStatement state = connect.connect().prepareStatement(query)) {
            state.setString(1, id_financialData);
            state.setString(2, id_company);
            state.setInt(3, year);
            state.setDouble(4, sales);
            state.setDouble(5, salesCost);
            state.setDouble(6, grossProfit);
            state.setDouble(7, expensesAdmiSales);
            state.setDouble(8, depreciations);
            state.setDouble(9, interestPaid);
            state.setDouble(10, profitBeforeTaxes);
            state.setDouble(11, taxes);
            state.setDouble(12, excerciseUtility);
            state.executeUpdate();
        }
    }

    public FinancialReport report(String id_company, int year) throws SQLException {
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

    public static void main(String[] args) {
        DBConnect c = new DBConnect();
        c.connect();
    }

}
