using BMI_WEBAPP.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace BMI_WEBAPP.Controllers
{
    public class CalcController : Controller
    {
        // GET: Calc
        public ActionResult Index()
        {
            return View(new calc());
        }

        [HttpPost]
        public ActionResult Index(calc c,String calculate)
        {
            if (calculate == "bmic")
            {
                c.bmi =((c.weight /(c.height * c.height))* 703);

                if(c.bmi < 18.5)
                {
                    c.bmi_text = "UNDERWEIGHT";

                }
                else if(c.bmi < 20)
                {
                    c.bmi_text = "NORMAL";
                }
                else if (c.bmi < 30)
                {
                    c.bmi_text = "OVER WEIGHT";
                }
                else
                {
                    c.bmi_text = "OBESE";
                }
            }

            return View(c);
        }
    }
}