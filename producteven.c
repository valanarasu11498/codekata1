#include <stdio.h>

int main()
{
    int a,b,p;
    scanf("%d%d",&a,&b);
    p=a*b;
    if(p%2==0)
    {
        printf("even");
    }
    else
    {
        printf("odd");
    }
    return 0;
}
