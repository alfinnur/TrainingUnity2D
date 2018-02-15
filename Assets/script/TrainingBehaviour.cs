using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TrainingBehaviour : MonoBehaviour {
    public int x;
    // Use this for initialization
    void Start () {
        x += 10;
		x = x + 2;
	}
	
	// Update is called once per frame
	void Update () {
        print(x);
        x += 1;
	}
}
