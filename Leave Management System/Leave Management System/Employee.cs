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
    public partial class Employee : Form
    {

        OleDbConnection cn = new OleDbConnection();
        OleDbCommand cmd = new OleDbCommand();
        OleDbDataAdapter dt = new OleDbDataAdapter();



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
        public Employee()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                if (EmpId.Text == "" || EmpName.Text == "" || EmpGen.SelectedIndex == -1 || EmpPhone.Text == "" || EmpPass.Text == "" || EmpAdd.Text == "")
                {
                    MessageBox.Show("Missing Data!!!");
                }
                else
                {
                    connect();
                    cmd.CommandText = "insert into EmployeeTbl values(?,?,?,?,?,?)";
                    cmd.Parameters.AddWithValue("Id", Id.Text);
                    cmd.Parameters.AddWithValue("Name", EmpName.Text);
                    cmd.Parameters.AddWithValue("Gender", EmpGen.Text);
                    cmd.Parameters.AddWithValue("Phone", EmpPhone.Text);
                    cmd.Parameters.AddWithValue("Pass", EmpPass.Text);
                    cmd.Parameters.AddWithValue("Add", EmpAdd.Text);
                    cmd.ExecuteNonQuery();
                    MessageBox.Show("Customer data saved!!!", "Saved", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    disconnect();
                    Id.Clear();
                    EmpName.Clear();
                    EmpPhone.Clear();
                    EmpPass.Clear();
                    EmpAdd.Clear();
                }
            }
            catch (Exception Ex)
            {
                MessageBox.Show(Ex.Message);
            }
        }

        private void EmployeeList_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void Employee_Load(object sender, EventArgs e)
        {
           
        }

        private void button2_Click(object sender, EventArgs e)
        {

        }
        private void button3_Click(object sender, EventArgs e)
        {
            try
            {
                if (EmpId.Text == "")
                {
                    MessageBox.Show("Missing Data!!!");
                }
                else
                {
                    connect();
                    cmd.CommandText = " delete from EmployeeTbl where EmpId='" + Id.Text + "'";
                    cmd.Parameters.AddWithValue("Id", Id.Text);
                    cmd.ExecuteNonQuery();
                    MessageBox.Show("Customer data Deleted!!!", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    disconnect();
                }
            }
            catch (Exception Ex)
            {
                MessageBox.Show(Ex.Message);
            }
        }

        private void Refresh_Click(object sender, EventArgs e)
        {
            DataTable dt = new DataTable();
            connect();
            cmd.CommandText = "select * from EmployeeTbl";
            OleDbDataAdapter da = new OleDbDataAdapter(cmd);
            da.Fill(dt);
            EmployeeList.DataSource = dt;
            disconnect();
        }

        private void label7_Click(object sender, EventArgs e)
        {

        }

        private void EmpId_TextChanged(object sender, EventArgs e)
        {

        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void flowLayoutPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void panel2_Paint(object sender, PaintEventArgs e)
        {

        }

        private void label11_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox5_Click(object sender, EventArgs e)
        {

        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox4_Click(object sender, EventArgs e)
        {

        }

        private void label8_Click(object sender, EventArgs e)
        {

        }

        private void label7_Click_1(object sender, EventArgs e)
        {

        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void Id_TextChanged(object sender, EventArgs e)
        {

        }

        private void EmpId_Click(object sender, EventArgs e)
        {

        }

        private void EmpPhone_TextChanged(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void EmpGen_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
