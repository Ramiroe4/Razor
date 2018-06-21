using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using services.Ejercicio1;

namespace Ejercicio1.services
{
    public class MaterialRepo : MaterialInterfaz
    {
        public List<Material> getList()
        {
            List<Material> materiales = new List<Material>()
            {
                new Material{MaterialId =1, Nombre="Bambú"},
                new Material{MaterialId =2, Nombre="Madera"},
                new Material{MaterialId =3, Nombre="Ladrillos"},
                new Material{MaterialId =4, Nombre="Bloques de hormigón"},
                new Material{MaterialId =5, Nombre="Ladrillos triturados(para los cimientos)"},
                new Material{MaterialId =6, Nombre="Tierra de construcción, seca y suelta"},
                new Material{MaterialId =7, Nombre="Tierra seca y suelta"},
                new Material{MaterialId =8, Nombre="Tierra húmeda y apisonada"},
                new Material{MaterialId =9, Nombre="Grava"},
                new Material{MaterialId =10, Nombre="Arena seca-húmeda"},
                new Material{MaterialId =11, Nombre="Cemento"},
                new Material{MaterialId =12, Nombre="Hormigón de cemento"},
                new Material{MaterialId =13, Nombre="Mortero de cemento"},
                new Material{MaterialId =12, Nombre="Hormigón armado(5 % de acero)"},
            };
            return materiales;
        }
    }
}
