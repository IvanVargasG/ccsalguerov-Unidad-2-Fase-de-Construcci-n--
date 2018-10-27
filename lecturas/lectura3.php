		
		
		            <?php include ('../view/encabezado.php'); ?></br>		


                                                                          
                            <h1>Técnicas para analizar requerimientos de software</h1></br></br>

                                <p><b> 1. Descomposición funcional</b></p></br>

                                    <blockquote>
                                        La descomposición funcional se refiere al proceso de identificar y resolver las relaciones funcionales en sus 
                                    partes constituyentes, de tal forma que la función global pueda ser reconstruida a partir de sus partes. 
                                    Por lo general, la descomposición funcional se realiza para identificar y entender los componentes o partes que 
                                    constituyen un todo (o función global). En este proceso, es vital identificar las interacciones entre componentes.
                                    </blockquote></br></br>

                                    <blockquote>
                                        Aplicado a la Ingeniería de requisitos, consiste en tomar los requerimientos de software, dividirlos en partes y 
                                    analizarlos individualmente. De ser necesario, se pueden descomponer en más partes hasta lograr un nivel adecuado 
                                    de detalle. En cierto sentido, el proceso es similar al de la elaboración de una estructura de desglose de trabajo 
                                    de un proyecto.
                                    </blockquote></br>

                                    <blockquote>
                                        En Ingeniería de sistemas, la descomposición funcional consiste en definir un sistema en términos funcionales, 
                                    para luego definir funciones de más bajo nivel y establecer las relaciones con estas funciones de alto nivel. 
                                    La intención es dividir un sistema de tal forma que cada componente se pueda describir sin necesidad de referir 
                                    a otro componente.
                                    </blockquote></br>

                                <p>De esta forma, cada parte del sistema tendrá funciones independientes, que pueden reusarse y reemplazarse.</p></br>


                                <p><b> 2. Especificación vía Sentencias Textuales </b></p></br>

                                    <blockquote>
                                        Es la forma tradicional de la especificación de requerimientos de software, se usan especificaciones textuales en
                                    lenguaje natural, que se documentan en matrices de trazabilidad de requerimientos o definiciones del alcance.
                                    </blockquote></br>

                                    <blockquote>
                                        El procedimiento consiste en tomar el requerimiento producto del levantamiento de información, para desarrollar 
                                    una narrativa más detallada, no usa herramientas visuales como los flujogramas o estructura como los casos de uso, 
                                    es simplemente una descripción más detallada del requerimiento en lenguaje natural.
                                    </blockquote></br>

                                <p><b> 3. Modelado del proceso </b></p></br>


                                    <blockquote>
                                        Comprende la elaboración de diagramas de flujo de procesos (Flujogramas) a partir de los requerimientos del 
                                    software; Existen diversas herramientas de modelado de procesos, cada una de las cuales posee sus propios símbolos 
                                    y reglas, es muy útil para entender el trabajo realizado en múltiples pasos, tareas, roles y departamentos 
                                    intervinientes.
                                    </blockquote></br>

                                    <blockquote>
                                        Los procesos son iniciados por eventos y pueden abarcar actividades automatizadas, manuales o combinación entre 
                                    ambas, su naturaleza visual ayuda a la comprensión y comunicación a terceros; Cuando los procesos son complejos, 
                                    deben desglosarse en componentes (subprocesos).
                                    </blockquote></br>

                                    <center><picture><img src="../img/F_Proceso.png"></picture></center>

                                    <li><a href="https://www.google.com.ar/search?q=modelo+de+proceso&safe=strict&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjrteDz8aHeAhWFEpAKHYTKDuoQ_AUIDigB&biw=1440&bih=794#imgrc=wu5rgQKPOl6QvM:"> Recuperado de Wikipedia. (S.F.). Modelo Proceso. </a></li></br></br>

                                <p> La relación entre los diagramas de flujo y la gerencia de proyectos es fundamental para el éxito.</p></br>


                                <p><b> 4. Modelo de dominio </b></p></br>

                                    <blockquote>
                                        En Ingeniería de software, en análisis de dominio consiste en analizar sistemas o software relacionados en un 
                                    dominio, con la finalidad de encontrar sus partes comunes y partes que los diferencian. Produce un modelo de 
                                    contexto de negocio para todo el sistema.
                                    </blockquote></br>

                                    <blockquote>
                                        Un modelo de dominio comprende diagramas conceptuales que incluyen tanto el comportamiento de un sistema como sus 
                                    datos; Un tipo de modelo de dominio son los diagramas de funcionalidades (Features Diagrams), que es una 
                                    representación “compacta” del sistema o aplicación en términos de sus características.
                                    </blockquote></br>

                                   <center><picture><img src="../img/D_Funcionalidades.png"></picture></center>
                                   <li><a href="https://www.google.com.ar/search?q=diagrama+de+funcionalidad&safe=strict&source=lnms&tbm=isch&sa=X&ved=0ahUKEwia047i76HeAhVROZAKHfILCSMQ_AUIDigB&biw=1440&bih=794#imgrc=3VwkkoqU0sSgnM:"> Recuperado de Wikipedia. (S.F.). Diagrama de funcionalidad. </a></li></br></br>

                                    <blockquote>
                                        El análisis de dominio produce modelos orientados a objetos o modelos relacionales de datos, que pueden ser usados 
                                    por los desarrolladores de software como base de arquitecturas de software y aplicaciones. 
                                    </blockquote></br>

                                <p><b> 5. Casos de Uso </b></p></br>

                                    <blockquote>
                                        En el Lenguaje de Modelado Unificado (UML), un caso de uso es una secuencia de interacciones entre un sistema y 
                                    alguien o algo que usa alguno de sus servicios, en el ámbito académico y profesional, es una de las técnicas de 
                                    mayor difusión para especificar el comportamiento del Sistema.
                                    </blockquote></br>

                                    <blockquote>
                                        Formato simple y estructurado que puede ser compartido entre usuarios y desarrolladores; Además de usarse para 
                                    analizar los requerimientos de software, también pueden usarse en el diseño del sistema e inclusive para definir 
                                    pruebas de caja negra (Testing). Son útiles en sistemas informáticos orientados a la funcionalidad 
                                    (transacciones con el usuario), que se van a implementar orientados a objetos y con UML.
                                    </blockquote></br>

                                    <p>No son la mejor opción en sistemas sin usuarios, o dominados fundamentalmente por requerimientos no funcionales.</p></br>

                                    <center><picture><img src="../img/C_Uso.png"></picture></center>
                                    <li><a href="https://msdn.microsoft.com/es-es/library/dd409427.aspx"> Recuperado de msdn.microsoft. (2015). Diagramas de casos de uso de UML </a></li></br></br>

                                    <p><b> 6. Checklists </b></p></br>

                                    <blockquote>
                                        La lista de chequeo (Checklist) consiste en una serie de preguntas o revisiones que se realizan sobre los requerimientos 
                                    de software, que nos sean presentados de forma escrita; Una lista de chequeo puede realizar preguntas como:
                                    </blockquote></br>
                                        <ul>
                                            <li> ¿Se han especificado los requisitos de hardware y software?</li>
                                            <li> ¿Se han realizado consideraciones de seguridad?</li>
                                            <li> ¿El nivel de granularidad del requerimiento se ha incluido?</li>
                                            <li> ¿Se ha incluido el código de referencia en para identificar el requisito en el desglose de requerimientos?</li>
                                            <li> ¿Está escrito el requerimiento en un lenguaje claro y conciso?</li>
                                            <li> ¿El requerimiento es único? (no existe duplicidad con otro requerimiento).</li>
                                        </ul></br>

                                    <blockquote>
                                        La lista de chequeo sirve de marco de trabajo y procedimental para revisar el requerimiento, facilitando su 
                                    análisis de forma estructurada, los requerimientos se pueden revisar sobre la matriz de trazabilidad de 
                                    requerimientos o sobre la definición del alcance.
                                    </blockquote></br>


                                <p><b> 7. Inspección </b></p></br>


                                <p> Revisión no destructiva de los requerimientos de software. Por ejemplo:</p></br>
                                        <ul>
                                            <li> Examinar un software visualmente para constatar que las pantallas solicitadas se encuentran incluidas.</li>
                                            <li> Verificar la inclusión de los campos necesarios para el ingreso de datos.</li>
                                            <li> Verificar la existencia de los botones necesarios para iniciar la funcionalidad que ha sido requerida.</li>
                                            <li> Verificar que el requerimiento se apega a los estándares definidos para la aplicación. Por ejemplo estándares de navegación entre pantallas y estándares de interfaz gráfica</li>
                                            <li></li>
                                        </ul>

                                    <blockquote>
                                        De forma similar al uso de la lista de chequeo, la inspección consiste en tomar el requerimiento definido en la 
                                    matriz de trazabilidad o definición de alcance, leerlo y producir un resultado para su corrección.
                                    </blockquote></br>

                                <p><b> 8. Prototipos </b></p></br>

                                <p> Consiste en elaborar representaciones visuales (interfaz gráfica con el usuario) de los requerimientos de software.</br>


                                    <blockquote>
                                    Es una herramienta muy útil para validar con los usuarios, clientes e interesados de proyecto que el diseño funcional corresponde con los requerimientos de software (Que existe entendimiento común entre desarrolladores de software y usuarios); Permite a desarrolladores y usuarios entender mejor los requerimientos, determinar cuáles son indispensables y cuales deseables, e identificar riesgos de forma temprana.
                                    </blockquote></br>

                                    <blockquote>
                                    Puede enfocarse en toda la solución o sólo en áreas específicas, puede extenderse innecesariamente en el tiempo si las discusiones se realizan en torno al como en lugar de en torno al que la elaboración de prototipos conlleva iteraciones entre desarrolladores y usuarios, en los cuales se van elaborando varios prototipos y sometidos a evaluación del cliente.
                                    </blockquote></br>

                                    <center><picture><img src="../img/Prototipo.png"></picture></center>
                                    <li><a href="https://www.google.com.ar/search?safe=strict&biw=1440&bih=794&tbm=isch&sa=1&ei=BvXRW83HGoOTwgSrvJyQDQ&q=Prototipos+analisis+de+requisitos+interfaz+gr%C3%A1fica+pagina&oq=Prototipos+analisis+de+requisitos+interfaz+gr%C3%A1fica+pagina&gs_l=img.3...66788.681"> Recuperado de Wikipedia. (S.F). Prototipos. </a></li></br></br></br>


                                    <li><a href="http://www.pmoinformatica.com/2016/08/tecnicas-analisis-requerimientos.html"><i> Recuperado de pmoinformatica. (10 de Agosto de 2016). 8 Técnicas de análisis de requerimientos de software. </i></a></li></br></br></br>

                               

                       
                    <?php include ('../view/contador.php') ;?>                        

                    <?php include ('../view/piepag.php');?>

                 </header>

            </div>

        </body>
</html>

