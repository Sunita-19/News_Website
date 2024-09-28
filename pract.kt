fun main(args: Array<String>) {
    
    println("Sunita Yadav 68")
val scanner = Scanner(System.`in`)

    print("Enter the number of values: ")
    val count = scanner.nextInt()
    val n1 = -4.5
    val n2 = 3.9
    val n3 = 2.5

    if (n1 >= n2 && n1 >= n3)
        println("$n1 is the largest number.")
    else if (n2 >= n1 && n2 >= n3)
        println("$n2 is the largest number.")
    else
        println("$n3 is the largest number.")
}