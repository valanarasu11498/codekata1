#include <stdio.h>

int main()
{
    int n,dc=0;
    scanf("%d",&n);
    if(n==0)
    {
        printf("1");
    }
    else
    {
    while(n!=0)
    {
        dc++;
        n=n/10;
    }
    printf("%d",dc);
    }
    return 0;
}
