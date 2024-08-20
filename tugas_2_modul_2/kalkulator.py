class kalkulator: #kelas untuk kalkulator
 def __init__(self, angka1, angka2): #konstruktor
    #atribut
    self.angka1 = angka1  
    self.angka2 = angka2

 # Metode
 def tambah(self):
  return self.angka1 + self.angka2 #codingan rumus pertambahan
 
 def kurang(self):
   return self.angka1 - self.angka2 #codingan rumus perngurangan
 
 def kali(self):
   return self.angka1 * self.angka2 #codingan rumus perkalian
 
 def bagi(self):
     if self.angka2!=0:
        return self.angka1 / self.angka2
     else:
        return "tidak bisa di bagi dengan nol" #codingan rumus pembagian
     
kalkulator = kalkulator(18, 2) #membuat objek dari kelas kalkulator
print("hasil pertambahan",kalkulator.tambah ()) #hasil dari kalkulator pertambahan
print("hasil pengurangan",kalkulator.kurang()) #hasil dari kalkulator pengurangan
print("hasil perkalian", kalkulator.kali()) #hasil dari kalkulator perkalian
print("hasil pembagian", kalkulator.bagi()) #hasil dari kalkulator pembagian

     
    
