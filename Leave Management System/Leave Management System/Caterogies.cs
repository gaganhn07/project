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
    public partial class Caterogies : Form
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
        public Caterogies()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void Caterogies_Load(object sender, EventArgs e)
        {

        }

        private void CatSave_Click(object sender, EventArgs e)
        {
            connect();
            cmd.CommandText = "insert into CategoryiesTb values(?)";
           // cmd.Parameters.AddWithValue("Name", CatName.Text);
            cmd.ExecuteNonQuery();
            MessageBox.Show("Customer data saved!!!", "Saved", MessageBoxButtons.OK, MessageBoxIcon.Information);
            disconnect();
        }

        private void CatRefresh_Click(object sender, EventArgs e)
        {
            DataTable dt = new DataTable();
            connect();
            cmd.CommandText = "select * from CategoryiesTb";
            OleDbDataAdapter da = new OleDbDataAdapter(cmd);
            da.Fill(dt);
            CategoriesList.DataSource = dt;
            disconnect();
        }
    }
}
