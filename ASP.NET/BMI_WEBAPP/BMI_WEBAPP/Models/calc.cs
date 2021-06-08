using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace BMI_WEBAPP.Models
{
    public class calc
    {
        public double weight { get; set; }
        public double height { get; set; }

        public double bmi { get; set; }

        public string bmi_text { get; set; }
    }
}