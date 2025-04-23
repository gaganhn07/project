using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.OleDb;
using System.Windows.Forms;

namespace Leave_Management_System
{
    public partial class Form1 : Form
    {
        OleDbConnection cn = new OleDbConnection();
        OleDbCommand cmd = new OleDbCommand();



        void connect()
        {
            cn.ConnectionString = "Provider=SQLOLEDB; Data Source=(local); Initial Catalog=LMS; Integrated Security=SSPI";
            cn.Open();
            cmd.Connection = cn;
        }

        void disconnect()
        {
            cmd.Parameters.Clear();
            cn.Close();
        }

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            connect();
            cmd.CommandText = "insert into login(Name,Password)values(?,?)";
            cmd.Parameters.AddWithValue("cid", UserNameTb.Text);
            cmd.Parameters.AddWithValue("cname", UserPassTb.Text);
            cmd.ExecuteNonQuery();
            MessageBox.Show("Customer data saved!!!", "Saved", MessageBoxButtons.OK, MessageBoxIcon.Information);
            disconnect();
        }

        private void Loginpanel_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
