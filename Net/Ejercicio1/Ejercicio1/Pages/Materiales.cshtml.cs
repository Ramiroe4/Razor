using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Ejercicio1.services;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using services.Ejercicio1;

namespace Ejercicio1.Pages
{
    public class MaterialesModel : PageModel
    {
        private MaterialInterfaz _materialInterfaz;
        public MaterialesModel(MaterialInterfaz materialInterfaz)
        {
            _materialInterfaz = materialInterfaz;
        }
        public List<Material> materiales { get; set; }
        public void OnGet()
        {
            materiales = _materialInterfaz.getList();
        }
    }
}