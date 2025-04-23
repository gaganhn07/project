
namespace Leave_Management_System
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.button1 = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.UserNameTb = new System.Windows.Forms.TextBox();
            this.UserPassTb = new System.Windows.Forms.TextBox();
            this.Loginpanel = new Guna.UI2.WinForms.Guna2CustomGradientPanel();
            this.Loginpanel.SuspendLayout();
            this.SuspendLayout();
            // 
            // button1
            // 
            this.button1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.Location = new System.Drawing.Point(152, 312);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(120, 47);
            this.button1.TabIndex = 0;
            this.button1.Text = "LOGIN";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.SystemColors.Control;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(147, 83);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(102, 25);
            this.label1.TabIndex = 1;
            this.label1.Text = "Username";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(147, 201);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(98, 25);
            this.label2.TabIndex = 2;
            this.label2.Text = "Password";
            // 
            // UserNameTb
            // 
            this.UserNameTb.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.UserNameTb.Location = new System.Drawing.Point(148, 136);
            this.UserNameTb.Name = "UserNameTb";
            this.UserNameTb.Size = new System.Drawing.Size(213, 30);
            this.UserNameTb.TabIndex = 3;
            // 
            // UserPassTb
            // 
            this.UserPassTb.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.UserPassTb.Location = new System.Drawing.Point(152, 245);
            this.UserPassTb.Name = "UserPassTb";
            this.UserPassTb.Size = new System.Drawing.Size(213, 30);
            this.UserPassTb.TabIndex = 4;
            // 
            // Loginpanel
            // 
            this.Loginpanel.BackColor = System.Drawing.SystemColors.Control;
            this.Loginpanel.Controls.Add(this.label1);
            this.Loginpanel.Controls.Add(this.UserPassTb);
            this.Loginpanel.Controls.Add(this.button1);
            this.Loginpanel.Controls.Add(this.UserNameTb);
            this.Loginpanel.Controls.Add(this.label2);
            this.Loginpanel.FillColor = System.Drawing.Color.LightSkyBlue;
            this.Loginpanel.FillColor2 = System.Drawing.Color.WhiteSmoke;
            this.Loginpanel.Location = new System.Drawing.Point(295, 66);
            this.Loginpanel.Name = "Loginpanel";
            this.Loginpanel.Size = new System.Drawing.Size(486, 478);
            this.Loginpanel.TabIndex = 5;
            this.Loginpanel.Paint += new System.Windows.Forms.PaintEventHandler(this.Loginpanel_Paint);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1147, 706);
            this.Controls.Add(this.Loginpanel);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.Loginpanel.ResumeLayout(false);
            this.Loginpanel.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox UserNameTb;
        private System.Windows.Forms.TextBox UserPassTb;
        private Guna.UI2.WinForms.Guna2CustomGradientPanel Loginpanel;
    }
}

