using System;

public class Persoon {
    public string naam;
    private int leeftijd;
    protected char geslacht;
    public bool isStudent;
    public double gemiddeldCijfer;

    public Persoon(string naam, int leeftijd, char geslacht, bool isStudent, double gemiddeldCijfer) {
        this.naam = naam;
        this.leeftijd = leeftijd;
        this.geslacht = geslacht;
        this.isStudent = isStudent;
        this.gemiddeldCijfer = gemiddeldCijfer;
    }

    public int Leeftijd {
        get { return leeftijd; }
        set { leeftijd = value; }
    }
}
