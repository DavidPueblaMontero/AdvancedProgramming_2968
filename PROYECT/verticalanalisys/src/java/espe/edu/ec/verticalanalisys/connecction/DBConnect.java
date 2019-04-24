/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.connecction;

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
    public static void main(String[] args){
        DBConnect c= new DBConnect();
        c.connect();
    }
    
        
    
    
    
}
