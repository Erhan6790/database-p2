class Persoon:
    def __init__(self, naam, leeftijd, geslacht, isStudent, gemiddeldCijfer):
        self.naam = naam
        self._leeftijd = leeftijd
        self._geslacht = geslacht
        self.isStudent = isStudent
        self.gemiddeldCijfer = gemiddeldCijfer

    @property
    def leeftijd(self):
        return self._leeftijd

    @leeftijd.setter
    def leeftijd(self, value):
        self._leeftijd = value

    @property
    def geslacht(self):
        return self._geslacht

    @geslacht.setter
    def geslacht(self, value):
        self._geslacht = value
