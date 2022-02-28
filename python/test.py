from experta import *
import sys


class Person(Fact):
    """Info about the Person"""
    pass


def SUMFIELDS(p, *fields):
    return sum([p.get(x, 0) for x in fields])


class InreferenceEngine(KnowledgeEngine):   
    @Rule(Person(gejala_pertama="1"))
    def concerned_person(self):      
        print("A")   


    @Rule(Person(diare_berair="1"))
    def diare_berair(self):     
        print("B")

             
    @Rule(Person(diare_berair_parah="1"), Person(bepergian=MATCH.bepergian), Person(demam=MATCH.demam), Person(durasi=MATCH.durasi))
    def diare_berair_parah(self, bepergian, demam, durasi):      
        if (bepergian == "1"):
            print("C")
        elif (bepergian == "0" and demam == "0"):
            print("D") 
        elif (bepergian == "0" and demam == "1" and durasi == "0"):
            print("D")
        elif (bepergian == "0" and demam == "1" and durasi == "1"):
            print("F")
            print("G")


    @Rule(Person(diare_disentri="1"), Person(bepergian=MATCH.bepergian), Person(demam=MATCH.demam))
    def diare_disentri(self, bepergian, demam):
        if(demam == 0):
            print("E")
        elif(demam == "1" and bepergian == "0"):
            print("F")
            print("G")
        else:
            print("G")
   


engine = InreferenceEngine()
engine.reset()
engine.declare(Person(gejala_pertama = sys.argv[1],
                      diare_berair = sys.argv[2],
                      diare_berair_parah = sys.argv[3],
                      diare_disentri = sys.argv[4],
                      bepergian = sys.argv[5],
                      demam = sys.argv[6],
                      durasi = sys.argv[7],
                      ))

# print("Argument List:", str(sys.argv))
engine.run()


